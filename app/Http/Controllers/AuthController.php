<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration(Request $request){
        $data = [];
        $data["message"] = "";
        
        if($request->isMethod("post")){
            $full_name = $request->input("full_name");
            $email = $request->input("email");
            $password = $request->input("password");

            $data["message"] = "Successfully registered";
        }

        return view("auth.registration", $data);
    }
}
