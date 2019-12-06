<?php

namespace App\Http\Controllers;

use App\female_question;
use Illuminate\Http\Request;

class FemaleBesttyController extends Controller
{
    public function fe_question(){
        $female_questions=female_question::all();
        return view('bestty.fe-question',['female_questions'=>$female_questions]);
    }
    public function result(){

        // $questions = Bestty::all();


        return view('bestty.result-fe1');
    }
}
