<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FemaleBesttyController extends Controller
{
    public function fe_question(){
        return view('bestty.fe-question');
    }
}
