<?php

namespace bluemax\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use bluemax\Usuarios;
use bluemax\SeccionEncabezado;
use bluemax\Http\Requests\SeccionEncabezadoRequest;

use Illuminate\Support\Facades\Storage;
class SeccionEncabezadoController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("seccion_encabezado")->get();
        return view('modulosadmin.seccionencabezado.encabezado',compact('datos'));
    }

    public function store(SeccionEncabezadoRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
        $nuevo = new SeccionEncabezado;
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->posicion= $request->posicion;
        
        $nuevo->imagen= $request->file('imagen')->store("encabezados");
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(SeccionEncabezadoRequest $request)
    {
        $imgold= DB::table("seccion_encabezado")->where("id","=",$request->id)->get();
        $img_old="";
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
           
            $img_old= $pas->imagen;
        }
       
       
            if(empty($request->imagen)){
        $nuevo = SeccionEncabezado::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->posicion= $request->posicion;
        
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
     else{
        Storage::delete($img_old);
        $nuevo = SeccionEncabezado::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->posicion= $request->posicion;
        //$usuarios->foto= $request->foto;
        if($nuevo->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
        
     }
   
       
    }  
    
    public function destroy($id){
        $eliminar=SeccionEncabezado::find($id);
        $imgold= DB::table("seccion_encabezado")->where("id","=",$id)->get();
        $img_old="";
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
           
            $img_old= $pas->imagen;
        }
        Storage::delete($img_old);
        if($eliminar->delete()){
            return back()->with("success","Operación correcta.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
}
