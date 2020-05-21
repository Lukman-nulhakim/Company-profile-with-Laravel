<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function master(){
        return view('master');
    }
    
    public function home(){
        return view('content.home');
    }
    
    public function produk(){
        return view('content.produk');
    }
    
    public function service(){
        return view('content.service');
    }
    
    public function portfolio(){
        return view('content.portfolio');
    }

    public function about(){
        return view('content.about');
    }
    
}
