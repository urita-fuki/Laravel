<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Person extends Model
{
    protected $quarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
