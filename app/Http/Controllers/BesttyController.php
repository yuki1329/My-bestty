<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BesttyController extends Controller
{
    public function index(){
        return view('bestty.home');
    }
    public function question(){
        return view('bestty.question');
    }
}
