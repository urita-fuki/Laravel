<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $date = ['msg'=>'これはコントロールから渡されたメッセージです。'];
        return view('hello.index',$date);
        
    }
}
