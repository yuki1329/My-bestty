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
    public function result(Request $request){
       
        
        $questions = male_question::all();
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
            return view('bestty.result-ma1');
        }else if ( $c > $b && $c >$a){
            return view('bestty.result-ma2');

        }else if ($b > $a && $b > $c){
            return view('bestty.result-ma3');
        }
        

        


        
        

        
       
    

        

        
    }
}