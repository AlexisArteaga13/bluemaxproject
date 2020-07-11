<?php

namespace bluemax\Http\Controllers;
use bluemax\SeccionNosotros;
use bluemax\Http\Requests\SeccionNosotrosRequest;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
class SeccionNosotrosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("seccion_nosotros")->get();
        return view('modulosadmin.seccionnosotros.nosotros',compact('datos'));
    }

    public function store(SeccionNosotrosRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
        $nuevo = new SeccionNosotros;
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->imagen= $request->file('imagen')->store("nosotros");
        $nuevo->icono= $request->file('icono')->store("icononosotros");
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(SeccionNosotrosRequest $request)
    {
        $imgold= DB::table("seccion_nosotros")->where("id","=",$request->id)->get();
        $img_old="";
        $icono_old="";
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
            $icono_old=$pas->icono;  
            $img_old= $pas->imagen;
        }
      
       
            if(empty($request->imagen) && empty($request->icono)){
        $nuevo = SeccionNosotros::find($request->id);
       
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
     elseif(!empty($request->imagen) && empty($request->icono)){
        Storage::delete($img_old);
        $nuevo = SeccionNosotros::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->imagen= $request->file('imagen')->store("nosotros");
        if($nuevo->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
        
     }
     elseif(!empty($request->icono) && empty($request->imagen)){
        Storage::delete($icono_old);
        $nuevo = SeccionNosotros::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->icono= $request->file('icono')->store("icononosotros");
        
        if($nuevo->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
     }
       else{
        Storage::delete($icono_old);
        Storage::delete($img_old);
        $nuevo = SeccionNosotros::find($request->id);
       
        $nuevo->titulo=$request->titulo;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->imagen= $request->file('imagen')->store("nosotros");
        $nuevo->icono= $request->file('icono')->store("icononosotros");
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
        $eliminar=SeccionNosotros::find($id);
        $imgold= DB::table("seccion_nosotros")->where("id","=",$id)->get();
        $img_old="";
        $icon_old="";
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
            $icon_old=$pas->icono;
            $img_old= $pas->imagen;
        }
        Storage::delete($img_old);
        Storage::delete($icon_old);
        if($eliminar->delete()){
            return back()->with("success","Operación correcta.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
}
