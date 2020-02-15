<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'subject' => 'required',
        'content' => 'required',
        'name' => 'required',
        'address' => 'required',
    );
}
