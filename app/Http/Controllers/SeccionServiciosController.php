<?php

namespace bluemax\Http\Controllers;
use bluemax\SeccionServicios;
use bluemax\Http\Requests\SeccionServiciosRequest;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
class SeccionServiciosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("seccion_servicios")->get();
        return view('modulosadmin.seccionservicios.servicios',compact('datos'));
    }

    public function store(SeccionServiciosRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
        $nuevo = new SeccionServicios;
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->imagen= $request->file('imagen')->store("servicios");
       
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(SeccionServiciosRequest $request)
    {
        $imgold= DB::table("seccion_servicios")->where("id","=",$request->id)->get();
        $img_old="";
        
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
           
            $img_old= $pas->imagen;
        }
      
       
            if(empty($request->imagen)){
        $nuevo = SeccionServicios::find($request->id);
       
        $nuevo->titulo=$request->titulo;
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
     elseif(!empty($request->imagen)){
        Storage::delete($img_old);
        $nuevo = SeccionServicios::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->imagen= $request->file('imagen')->store("servicios");
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
        $eliminar=SeccionServicios::find($id);
        $imgold= DB::table("seccion_servicios")->where("id","=",$id)->get();
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
