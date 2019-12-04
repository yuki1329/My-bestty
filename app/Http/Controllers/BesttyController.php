<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BesttyController extends Controller
{
    public function index(){
        return view('bestty.home');
    }
    public function ma_question(){
        
        
        return view('bestty.question');
    }
    public function fe_question(){
        return view('bestty.fe-question');
    }
    public function howto(){
        return view('bestty.howto');
    }

    public function result(Request $request){

        // $questions = Bestty::all();

        dd($request->question7);

        $question = \App\Bestty::where(
            [
                ['id',1],['Ya','Yb','Yc']
            ]
        )->get();
    
        dd($question);
        return view('bestty.result');
    }
}