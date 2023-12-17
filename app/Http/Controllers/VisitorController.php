<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    //
    public function index()
    {
        // Your code here
        return view ('home');
    }

    public function about()
    {
        // Your code here
        return view ('about');
    }
    
    public function services()
    {
        // Your code here
        return view ('services');
    }

    
    public function blog()
    {
        
        // Your code here
        return view ('blog');
    }
    
    
    public function blogdetails()
    {
        // Your code here
        return view ('blogdetails');
    }

    public function projects()
    {
        // Your code here
        return view ('projects');
    }

    
}
