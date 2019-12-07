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
    public function result2(Request $request){
       
        
        $questions = female_question::all();
        // $id = Question::select('id')->get();
        // $Y =  Question::select('Ya', 'Yb', 'Yc')->get();
        // $N =  Question::select('Na', 'Nb', 'Nc')->get();
        
        // $sum = array('A' => 0 , 'B' => 0, 'C' => 0);
        // dd($request);
    
        $a = 0;
        $b = 0;
        $c = 0;

        $results = $request->all();



        foreach($questions as $question)

        {
            $key = 'question-' . $question->id;
            if ($results[$key] == 'yes') {
                $a += $question->Ya;
                $b += $question->Yb;
                $c += $question->Yc;
            } else {
                $a += $question->Na;
                $b += $question->Nb;
                $c += $question->Nc;

            }



        }

        if( $a > $b && $a >$c ){
            return view('bestty.result-fe1');
        }else if ( $c > $b && $c >$a){
            return view('bestty.result-fe2');

        }else if ($b > $a && $b > $c){
            return view('bestty.result-fe3');
        }
}
}