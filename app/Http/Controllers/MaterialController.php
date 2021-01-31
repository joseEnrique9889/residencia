<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isdmin');
    }
    public function index(Request $request)
    {
        $nombre = $request->get('buscar');

      $materials =Material::where('nombre','like',"%$nombre%")->paginate(10);
        //$materials=Material::all();
        
        return view('admin.materiales.index',compact('materials'));
    }

    public function Estado(Request $request)
    {
        //$materials=Material::all();

         $nombre = $request->get('buscar');

      $materials =Material::where('codigo','like',"%$nombre%")->paginate(10);
        
        return view('admin.materiales.estado',compact('materials'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materiales.create');
         //$cat= Categoria::orderBy('nombre')->get();
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datosMaterial=request()->except('_token');
         // $usuarios = User::where('id',Auth::id())->get();
        //validamos que el campo imagen tenga algo
        
       Material::insert($datosMaterial);
        //return response()->json($datosCategorias);
        //return view('supervisor.categoria.index');
       return redirect('materiales');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materials= Material::findOrFail($id);

        return view('admin.materiales.show',compact('materials'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materials= Material::findOrFail($id);

        return view('admin.materiales.edit',compact('materials'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $datosMaterial=request()->except(['_token','_method']);

       if ($request->hasFile('imagen')) {

            $materials= Categoria::findOrFail($id);

            Storage::delete('public/'.$materials->imagen);

            $datosMaterial['imagen']=$request->file('imagen')->store('uploads/categoria','public');
        }

        Material::where('id','=',$id)->update($datosMaterial);

        $materials= Material::findOrFail($id);
 return view('admin.materiales.edit',compact('materials'));
            
           }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $materials= Material::findOrFail($id);

       

          Material::destroy($id);  
       

        return redirect('materiales');
    
    }

    public function subMaterial(Request $request, $id)
    {
        //
       // $this->authorize('haveaccess','categoria.index');

        //$usuarios= User::
       
        $submat=Material::findOrFail($id);

      return view('admin.materiales.material.submaterial',compact('submat'));
    }

    public function createmat($id){
        $submat =Material::findOrFail($id);
       return view('admin.materiales.material.crearmat',compact('submat'));

    }

   public function storemat(Request $request)
    {
        $datosMaterial=request()->except('_token');
         // $usuarios = User::where('id',Auth::id())->get();
        //validamos que el campo imagen tenga algo
        if ($request->hasFile('imagen')) {
            $datosMaterial['imagen']=$request->file('imagen')->store('uploads/material','public');
        }
       Material::insert($datosMaterial);
        //return response()->json($datosCategorias);
        //return view('supervisor.categoria.index');
       return redirect('materiales');
    
    }


}
