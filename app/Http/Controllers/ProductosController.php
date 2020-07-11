<?php

namespace bluemax\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use bluemax\Productos;
use bluemax\Http\Requests\ProductosRequest;
use Illuminate\Support\Facades\Storage;
class ProductosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $categoria = DB::table('categoria')->get();
        $datos = DB::table("producto as p")->join('categoria as c',"c.id","p.id")->select('p.id as id','p.nombreproducto as nombreproducto','p.descripcion as descripcion','p.imagen as imagen','c.id as idcategoria','c.nombre as nombrecat')->get();
        return view('modulosadmin.productos.productos',compact('datos','categoria'));
    }

    public function store(ProductosRequest $request){
     
     // dd($request->file('foto')->store("usuarios"));
       $nuevo = new Productos;
        $nuevo->nombreproducto=$request->nombre;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->idcategoria= $request->categoria;
        
        $nuevo->imagen= $request->file('imagen')->store("productos");
      //$nuevo->foto=asset(Storage::disk('public')->put('image',$request->file('foto')));
       // Storage::disk('public')->put('image',$request->file('foto'))
        if($nuevo->save()){
            return back()->with("success","Operación exitosa.");
        }
        else{
            return back()->with("error","Ocurrió un error.");
        }
    }
    public function update(ProductosRequest $request)
    {
        $imgold= DB::table("producto")->where("id","=",$request->id)->get();
        $img_old="";
        /*echo $passwordold;*/
        
        foreach($imgold as $pas){
           
            $img_old= $pas->imagen;
        }
       
       
            if(empty($request->imagen)){
        $nuevo = Productos::find($request->id);
       
        $nuevo->nombreproducto=$request->nombre;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->idcategoria= $request->categoria;
        
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
        $nuevo = Productos::find($request->id);
       
        $nuevo->nombreproducto=$request->nombre;
        $nuevo->descripcion=$request->descripcion;
        $nuevo->idcategoria= $request->categoria;
        $nuevo->imagen= $request->file('imagen')->store("productos");
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
        $eliminar=Productos::find($id);
        $imgold= DB::table("producto")->where("id","=",$id)->get();
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
