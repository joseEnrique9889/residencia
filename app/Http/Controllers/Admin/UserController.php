<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
     public function __construct(){
   		$this->middleware('auth');
   		$this->middleware('isdmin');
   	}

   	public function getUsers(Request $request ){
   		$nombre = $request->get('buscar');

   		$users =User::where('name','like',"%$nombre%")->paginate(10);
   		$data = ['users' => $users];
   		return view('admin.users.lista', $data);
   	}

}
