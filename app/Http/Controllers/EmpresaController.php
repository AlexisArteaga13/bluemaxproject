<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use bluemax\Empresa;
use Illuminate\Support\Facades\Storage;
class EmpresaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("empresa")->get();
        return view('modulosadmin.miempresa.empresa',compact('datos'));
    }
    public function update(Request $request)
    {
        
        //echo $request;

       if(empty($request->icono)){
        $empresa = Empresa::find($request->id);
        $empresa->nombre= $request->nombre;
        $empresa->direccion= $request->direccion;
        $empresa->telefono= $request->telefono;
        $empresa->correo= $request->correo;
        //$empresa->icono= $request->icono;
        if($empresa->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    else{
       $datosuser= DB::table("empresa")->where("id","=",$request->id)->get();
        $img_old="";
            foreach($datosuser as $datos){
                $img_old= $datos->icono;
       }
        //Storage::delete($img_old);
        $empresa = Empresa::find($request->id);
        $empresa->nombre= $request->nombre;
         $empresa->direccion= $request->direccion;
         $empresa->telefono= $request->telefono;
         $empresa->correo= $request->correo;
         $empresa->icono= $request->file('icono')->store("iconoempresa");
         if($empresa->update())
         {
             return back()->with("success","Datos Actualizados.");
         }
         else{
             return back()->with("error","Ocurrió un error.");
         }
    }
    }
        
   
}
