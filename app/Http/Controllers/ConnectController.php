<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth, Mail, Str;
use App\Mail\UserSendRecover;
use App\Mail\UserSendNewPassword;

use App\User;


class ConnectController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin(){
    	return view('connect.Login');

    }
    public function postLogin(Request $request){
    	$rules =[
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	];
    	$messages = [
    		'email.required' => 'Su correo electronico es requerido.',
    		'email.email' => 'El formato de su correo electronico es invalido',
    		'password.required' => 'Por favor escriba una contraseña',
    		'password.min' => 'La contraseña debe de contener al menos 8 caracteres',

    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'se a producido un error')->with('typealert', 'danger');
    	else:

    		if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
    			return redirect('/admin');
    		else:
    			return back()->with('message', 'Correo electronico o contraseña erronea')->with('typealert', 'danger');
    		endif;
    	endif;	

    }
    public function getRegister(){
    	return view('connect.register');

    }
    public function postRegister(Request $request){
    	$rules = [
    		'name' => 'required',
    		'a_Paterno' => 'required',
            'a_Materno' => 'required',
    		'email' => 'required|email|unique:users,email',
    		'password' => 'required|min:8',
    		'cpassword' =>'required|min:8|same:password'
    	];
    	$messages =[
    		'name.required' => 'su nombre es requerido.',
    		'a_Paterno.required' => 'Su apellido paterno es requerido',
            'a_Materno.required' => 'Su apellido materno es requerido',
            'control.required' => 'Su numero de Control es Requerido',
            'control.unique' =>'Ya existe un usuario registrado con ese numero de control',
            'Cuatri.required' => 'Su Cuatrimestre es Requerido',
    		'email.required' => 'Su correo electronico es requerido.',
    		'email.email' => 'El formato de su correo electronico es invalido',
    		'email.unique' => 'Ya existe un usuario regirado con este correo electronico',
    		'password.required' => 'Por favor escriba una contraseña',
    		'password.min' => 'La contraseña debe de contener al menos 8 caracteres',
    		'cpassword.required' => 'Es necesario confirmar la contraseña',
    		'cpassword.min' => 'La confirmacion de la contraseña debe de contener al menos 8 caracteres',
    		'cpassword.same' => 'Las contraseña no conciden.'
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);
    	if ($validator->fails()):
    		return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
    	else:
    		$user = new User;
    		$user->name = e($request->input('name'));
    		$user->a_Paterno = e($request->input('a_Paterno'));
            $user->a_Materno = e($request->input('a_Materno'));
            $user->control = e($request->input('control'));
            $user->Cuatri = e($request->input('Cuatri'));
    		$user->email = e($request->input('email'));
    		$user->password = Hash::make($request->input('password'));
    		if($user->save()):
    			return redirect('/login')->with('message', 'Su usuario se creo con exito ahora puede iniciar sesion')->with('typealert', 'success');
    		endif;
    		
    	endif;	
    	

    }
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    public function getRecover(){
       return view('connect.recover');

    }

    public function postRecover(Request $request){
       $rules = [
            'email' => 'required|email'
            
            
        ];
        $messages =[
           
            'email.required' => 'Su correo electronico es requerido.',
            'email.email' => 'El formato de su correo electronico es invalido',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
        else: 
            $user = User::where('email', $request->input('email'))->count();
            if ($user == "1"):
                $user = User::where('email', $request->input('email'))->first();
                $code =rand(100000, 999999);
                $data = ['name' => $user->name, 'email' => $user->email, 'code' => $code];

                $u = User::find($user->id);
                $u->password_code = $code;
                if ($u->save()):

                Mail::to($user->email)->send(new UserSendRecover($data));
                return redirect('/reset?email='.$user->email)->with('message', 'Ingrese el codigo que le hemos enviado a su correo electronico')->with('typealert', 'success');
            endif;

            else:
                return back()->with('message', 'este correo electronico no existe')->with('typealert', 'success');
            endif; 
        endif;
    }

    public function getReset(Request $request){
        $data = ['email' => $request->get('email')];
        return view('connect.reset', $data);
    }
    public function postReset(Request $request){
         $rules = [
            'email' => 'required|email',
            'code' => 'required'
            
            
        ];
        $messages =[
           
            'email.required' => 'Su correo electronico es requerido.',
            'email.email' => 'El formato de su correo electronico es invalido',
            'code.required' => 'El codigo de recuperacion es requerido',
           
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error')->with('typealert', 'danger');
        else: 
             $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->count();
             if ($user == "1"):
                $user = User::where('email', $request->input('email'))->where('password_code', $request->input('code'))->first();
                $new_password = Str::random(8);
                $user->password = Hash::make($new_password);
                $user->password_code = null;
                if($user->save()):
                      $data = ['name' => $user->name, 'password' => $new_password];

                     Mail::to($user->email)->send(new UserSendNewPassword($data));
                     return redirect('/login')->with('message', 'La contraseña fue restablecida con exito, le hemos enviado un correo electronico con su nueva contraseña para que pueda iniciar sesion')->with('typealert', 'success');

                 endif;
             else:
                 return back()->with('message', 'el correo electronico o el codigo de recuperacion son erroneos.')->with('typealert', 'danger');
             endif;
        endif;
    }
}
