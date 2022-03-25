<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use APP\Http\Requests\HelloRequest;
use App\Person;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
      /*$validator = Validator::make($request->query(),[
        'id' => 'required',
        'pass' => 'required',
      ]);
      if ($validator->fails()) {
        $msg = 'クエリーに問題があります。';
      }else{
        $msg = 'ID/PASSを受け付けました。フォームを入力して下さい。';
      }
      return view('hello.index', ['msg'=>$msg,]);*/

     $user = Auth::user();
     $sort = $request->sort;
     $items = Person::orderBy($sort, 'asc')->simplePaginate(5);
     $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
     return view('hello.index', $param);
    }
 
    public function getAuth(Request $request)
    {
      $param = ['message' => 'ログインしてください。'];
      return view('hello.auth', $param);
    }
    
    public function postAuth(Request $request)
    {
      $email = $request->email;
      $password = $request->password;
      if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $msg = 'ログインしました。(' . Auth::user()->name . ')';
      }else {
        $msg = 'ログインに失敗しました。';
      }
      return view('hello.auth', ['message' => $msg]);
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

    public function rest(Request $request)
    {
      return view('hello.rest');
    }

    public function ses_get(Request $request)
    {
      $sesdata = $request->session()->get('msg');
      return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
      $msg = $request->input;
      $request->session()->put('msg',$msg);
      return redirect('hello/session');
    }
}
