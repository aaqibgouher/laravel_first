<?php

namespace App\Http\Controllers;

/* this controller will call, inside that class we have lots of methods .*/
class HomeController extends Controller
{   
    /*if the user will call it , then what it will do is : */
    public function index(){        /*method is public and not taking any parameter. */
        $data = [];         /*a null array which will store users */
        $data["name"] = "Aaqib Gouher";     /*so name is the key , and inside it ,we have its value */

        $data["todos"] = [      /*similarly we have todo key , which stores some data. */
            "Hello i have to cook",
            "i have to read",
            "goto market"
        ];

        $data["users"] = [      /*inside same array, we have another key named users, which stores again an array . */
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

        return view('home', $data);         /*and then simply we are returning our view i.e home and the data */
    }
}

/*one more thing, whatever the key is there , will become the variable in view . In view , basically , it is used for viewing all of the things .Every view is suffixed with viewname.blade.php. using blade we can write the laravel in the html. */
