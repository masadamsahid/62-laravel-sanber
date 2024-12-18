<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function register(Request $request){
        return view("register");
    }

    public function welcome(Request $request){
        $full_name = $request->input("fName") . " " . $request->input("lName");
        return view("welcome", ["full_name"=> $full_name]);
    }
}
