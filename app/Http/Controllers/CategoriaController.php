<?php

namespace bluemax\Http\Controllers;
use bluemax\Categoria;
use bluemax\Http\Requests\CategoriaRequest;
use Illuminate\Http\Request;
use DB;
class CategoriaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("categoria")->get();
        return view('modulosadmin.categorias.categoria',compact('datos'));
    }

    public function store(CategoriaRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
        $nuevo = new Categoria;
        $nuevo->nombre=$request->nombre;
        $nuevo->descripcion=$request->descripcion;
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(CategoriaRequest $request)
    {
        
          
        $nuevo = Categoria::find($request->id);
       
        $nuevo->nombre=$request->nombre;
        $nuevo->descripcion=$request->descripcion;
       
        
       // $nuevo->imagen= $request->file('imagen')->store("encabezados");
        //$usuarios->foto= $request->foto;
        if($nuevo->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
        
     
     }
   
       
    
    
    public function destroy($id){
        $eliminar=Categoria::find($id);
      
       
        if($eliminar->delete()){
            return back()->with("success","Operación correcta.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
}
