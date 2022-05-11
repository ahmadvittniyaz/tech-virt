<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Motivationalquote extends Controller
{
    //
    public function index()
    {
       $data= Http::get('https://type.fit/api/quotes');
       return view('student.motivationalquotes',['data'=>$data]);
    }
}
