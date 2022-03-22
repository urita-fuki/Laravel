<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Jissyu5_3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = ___(1)___;
        return view('jissyu5_3.index', ['items' => $items]);
    }
    public function show(Request $request)
    {
        $id = $request->id;
        $item = ___(2)___;
        return view('jissyu5_3.show', ['item' => $item]);
    }
    public function add(Request $request)
    {
        return view('___(3)___');
    }
    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        ___(4)___;
        return redirect('/jissyu12');
    }
    public function edit(Request $request)
    {
        $item = ___(5)___;
        return view('jissyu5_3.edit', ['item' => $item]);
    }
    public function update(Request $request)
    {
        $param = [
				___(6)___,
				___(7)___,
				___(8)___,
        ];
        ___(9)___;
        return redirect('/jissyu12');
    }
    public function del(Request $request)
    {
        $item = ____(10)___;
        return view('jissyu5_3.del', ['item' => $item]);
    }
    public function remove(Request $request)
    {
        ___(11)___;
        return redirect('/jissyu12');
    }
}

}
