<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Validator;

class Jissyu7_1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Person::all();
        $param = ['input' => '','items' => $items];
        return view('jissyu7_1.index', $param);
    }

    public function find(Request $request)
    {
        $rules = [
            'input' => 'required',
        ];
        $messages = [
            'input.required' => '文字を入力してください。',
        ];
        $validator = Validator::make(___(7)___,___(8)___,___(9)___);
        if($validator->fails()){
            return redirect('/jissyu7_1')
            ->withErrors($validator)
            ->withInput();
        }
        $item = Person::where('name',$request->input)->first();
        return view('jissyu7_1.show', ['item' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jissyu7_1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(___(10)___, Person::___(11)___);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/jissyu7_1');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Person::find($id);
        return view('jissyu7_1.show', ['item' => $item]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Person::find(___(13)___);
        return view('jissyu7_1.edit', ['item' => $item]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/jissyu7_1');
    }

    public function del(___(15)___) 
    {
        $item = Person::find($id);
        return view('jissyu7_1.del', ['item' => $item]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Person::find(___(16)___)->delete();
        return redirect('/jissyu7_1');

    }
}
