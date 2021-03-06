<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Kouka1_2Request;

class Kouka1_2Controller extends Controller
{
    public function index()
    {
        return view('kouka1_2.index');
    }

    public function post(Request $request)
    {
        //全データの取得
        $data = $request->all();

        return view('kouka1_2.post', ['data' => $data]);
    }
}

