<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'subject' => 'required',
        'name' => 'required',
        );
}
