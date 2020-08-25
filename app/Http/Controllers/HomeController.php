<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(){
        $data = [];
        $data["name"] = "Aaqib Gouher";

        $data["todos"] = [
            "Hello i have to cook",
            "i have to read",
            "goto market"
        ];

        $data["users"] = [
            [
                "id" => 1,
                "name" => "aaqib gouher",
                "age" => 21
            ],
            [
                "id" => 2,
                "name" => "nazish fraz",
                "age" => 25
            ],
            [
                "id" => 3,
                "name" => "gouher danish",
                "age" => 30
            ],
        ];
        // $data["users"] = [];

        return view('home', $data);
    }
}
