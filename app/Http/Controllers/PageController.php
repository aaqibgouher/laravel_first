<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /*If this controller is called and then this method, then this will simply return this sentence. */
    public function about_us(){
        return "Hello from about us !";
        
    }
    /*And if this controller is called , then it return the view of test. */
    public function contact_us(){
        return view('test');
        
    }
}
