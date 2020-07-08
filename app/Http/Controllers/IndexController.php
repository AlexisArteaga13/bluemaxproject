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
        return view("index",compact("empresa","equipo"));
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
