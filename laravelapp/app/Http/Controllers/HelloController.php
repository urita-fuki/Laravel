<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use APP\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      $validator = Validator::make($request->query(),[
        'id' => 'required',
        'pass' => 'required',
      ]);
      if ($validator->fails()) {
        $msg = 'クエリーに問題があります。';
      }else{
        $msg = 'ID/PASSを受け付けました。フォームを入力して下さい。';
      }
      return view('hello.index', ['msg'=>$msg,]);
    }

    public function post(Request $request)
    {
      $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'numeric',
      ];
      $message = [
        'name.required' => '名前は必ず入力してください。',
        'mail.email' => 'メールアドレスが必要です。',
        'age.numeric' => '年齢を整数で記入下さい。',
        'age.min' => '年齢はゼロ歳以上で記入下さい',
        'age.max' => '年齢は０～２００の間で入力下さい。',
      ];
      $validator = Validator::make($request->all(), $rules, $message);

      $validator->sometimes('age', 'min:0', function($input){
        return is_numeric($input->age);
      });
      $validator->sometimes('age', 'max:200', function($input){
        return is_numeric($input->age);
      });

      if ($validator->fails()) {
        return redirect('/hello')
        ->withErrors($nalidator)
        ->withInput();
      }
      return view('hello.index', ['msg'=>'正しく入力されました！']);
    }
}
