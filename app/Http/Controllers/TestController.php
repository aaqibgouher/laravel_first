<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{   

    /*If user will hit /contact-us route, and then if this method os called then, simply it will return the view of test. */
    public function contact_us(){
        return view('test'); 
    }
}
