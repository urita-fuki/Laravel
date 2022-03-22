<?php

namespace App\Http\Controllers;

use APP\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function search(Request $request){
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->
            ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validata($request, Person::$rules);
        $person = new Person;
        $form = $requuest->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }
}
//