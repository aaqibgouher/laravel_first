<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = [];

        $data["users"] = User::all();
        return view("user.index", $data);
    }

    public function add(Request $request){
        $data = [
            "error" => ""
        ];

        try{
            if($request->isMethod("post")){
                $name = $request->input("name");
                $email = $request->input("email");

                User::insert([
                    "name" => $name,
                    "email" => $email,
                    "created_at" => now()
                ]);

                return redirect("user");
            }

        }catch(Exception $e){
            $data["error"] = $e->getMessage();
        }

        return view("user.add", $data);

    }
}
