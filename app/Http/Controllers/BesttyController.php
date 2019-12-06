<?php

namespace App\Http\Controllers;

use App\male_question;
use Illuminate\Http\Request;

class BesttyController extends Controller
{
    public function index(){
       return view('bestty.home');
    }
    public function ma_question(){
        $male_questions=male_question::all();
        return view('bestty.ma-question',['male_questions'=>$male_questions]);
    }
    public function howto(){
        return view('bestty.howto');
    }

    public function result(){

        // $questions = Bestty::all();

        return view('bestty.result-ma1');
    }
}