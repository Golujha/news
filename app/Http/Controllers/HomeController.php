<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view("home");
    }
    public function view(){
        return view("view");
    }
    public function insert(){
        return view("insert");
    }
//     public function create(){
//         return view("");
//     }
}
