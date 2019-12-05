<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
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
       
        
        $questions = Question::all();
        $id = Question::select('id')->get();
        $Y =  Question::select('Ya', 'Yb', 'Yc')->get();
        $N =  Question::select('Na', 'Nb', 'Nc')->get();
        

        
        foreach($id as $ids)
        {
 
            }


    
        

        
       
    

        
        // return view('bestty.result');
        
    }
}
