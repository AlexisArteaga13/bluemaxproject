<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use bluemax\Empresa;
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

       
       $empresa = Empresa::find($request->id);
       $empresa->nombre= $request->nombre;
        $empresa->direccion= $request->direccion;
        $empresa->telefono= $request->telefono;
        $empresa->correo= $request->correo;
        $empresa->icono= $request->icono;
        if($empresa->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }

    }
        
   
}
