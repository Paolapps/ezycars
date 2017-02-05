<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //home page
    public function index(){
        return View('viewIndex.index');
    }
    
    //about
    public function about(){
        return View('viewIndex.about');
    }

    //contact
    public function contact(){
        return View('viewIndex.contact');
    }
}
