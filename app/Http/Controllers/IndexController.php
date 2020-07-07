<?php

namespace bluemax\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IndexController extends Controller
{
    //
    public function index(){
        $empresa=DB::table("empresa")->first();
        return view("index",compact("empresa"));
    }
}
