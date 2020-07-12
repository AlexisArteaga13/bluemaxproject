<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use bluemax\Mail\CorreosRpta;
use bluemax\Mail\RptaUsuarioEmail;
class IndexController extends Controller
{
    //
    public function index(){
        $empresa=DB::table("empresa")->first();
        $equipo= DB::table("users")->get();
        $encabezados= DB::table("seccion_encabezado")->get();
        $nosotros = DB::table("seccion_nosotros")->get();
        $servicios = DB::table("seccion_servicios")->get();
        $categorias=DB::table('categoria')->get();
        $productos=DB::table('producto as p')
        ->join('categoria as c','p.idcategoria','c.id')->get();
        return view("index",compact("empresa","equipo","categorias","encabezados","productos","nosotros","servicios"));
    }
    public function productos(Request $request){

        $productos=DB::table('producto as p')
        ->join('categoria as c','p.idcategoria','c.id')->get();
       // ->where('c.id',"=",$idcat);
        return response()-> json($productos);
    }
    public function correo(Request $request){
        
        if($request->ajax()){
       $usuariosdeenvio=DB::table("users")->get();
        $empresa=DB::table("empresa")->first();
        foreach($usuariosdeenvio as $us){
            Mail::to($us->email)->send(new CorreosRpta($request));
        }
        Mail::to($request->email)->send(new RptaUsuarioEmail($request));
        Mail::to($empresa->correo)->send(new CorreosRpta($request));
        
        return "OK";
       
        }
        
    }
    
}
