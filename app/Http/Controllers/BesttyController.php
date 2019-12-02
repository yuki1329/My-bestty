<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BesttyController extends Controller
{
    public function index(){
        return view('bestty.home');
    }
    public function ma_question(){
        return view('bestty.ma_question');
    }
    public function fe_question(){
        return view('bestty.fe_question');
    }
}
