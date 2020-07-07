<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use bluemax\Usuarios;

use bluemax\Http\Requests\UsuariosRequest;
use Illuminate\Support\Facades\Storage;
class UsuariosController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $datos = DB::table("users")->get();
        return view('modulosadmin.usuarios.usuarios',compact('datos'));
    }

    public function store(UsuariosRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
        $nuevo = new Usuarios;
       $nuevo->name=$request->nombre;
        $nuevo->apellidos=$request->apellidos;
        $nuevo->password= bcrypt($request->password);
        $nuevo->email= $request->email;
        $nuevo->foto= $request->file('foto')->store("usuarios");
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(Request $request)
    {
        $passwordold= DB::table("users")->where("id","=",$request->idusers)->get();
        $img_old="";
        /*echo $passwordold;*/
        $passold="";
        foreach($passwordold as $pas){
            $passold= $pas->password;
            $img_old= $pas->foto;
        }
       
        if($passold != $request->password){
            if(empty($request->foto)){
        $usuarios = Usuarios::find($request->idusers);
        $usuarios->name= $request->nombre;
        $usuarios->apellidos= $request->apellidos;
        
        $usuarios->password= bcrypt($request->password);
        
        $usuarios->email= $request->correo;
        //$usuarios->foto= $request->foto;
        if($usuarios->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
        
     }
     else{
        Storage::delete($img_old);
        $usuarios = Usuarios::find($request->idusers);
        $usuarios->name= $request->nombre;
        $usuarios->apellidos= $request->apellidos;
        
        $usuarios->password= bcrypt($request->password);
        
        $usuarios->email= $request->correo;
        //$usuarios->foto= $request->foto;
        if($usuarios->update())
        {
            return back()->with("success","Datos Actualizados.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
        
     }
    }
     else{
        $usuarios = Usuarios::find($request->idusers);
        
        if(empty($request->foto)){
            $usuarios->name= $request->nombre;
            $usuarios->apellidos= $request->apellidos;
            $usuarios->email= $request->correo;
            $usuarios->foto= $request->file('foto')->store("usuarios");
            if($usuarios->update())
            {
                return back()->with("success","Datos Actualizados.");
            }
            else{
                return back()->with("error","Ocurrió un error.");
            }
        }
        else{
           // $datosuser= DB::table("users")->where("id","=",$request->idusers)->get();
            //$img_old="";
            foreach($passwordold as $datos){
                     $img_old= $datos->foto;
            }
            Storage::delete($img_old);
            $usuarios->name= $request->nombre;
            $usuarios->apellidos= $request->apellidos;
            $usuarios->email= $request->correo;
            $usuarios->foto= $request->file('foto')->store("usuarios");
            if($usuarios->update())
            {
                return back()->with("success","Datos Actualizados.");
            }
            else{
                return back()->with("error","Ocurrió un error.");
            }
        }
        /*
       
        
       */
     }
    }
    public function destroy($id){
        $usuario=Usuarios::find($id);
        if($usuario->delete()){
            return back()->with("success","Operación correcta.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
}
