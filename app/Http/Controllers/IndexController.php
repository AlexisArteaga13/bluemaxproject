<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    //
    public function index(){
        $empresa=DB::table("empresa")->first();
        $equipo= DB::table("users")->get();
        return view("index",compact("empresa","equipo"));
    }
}
