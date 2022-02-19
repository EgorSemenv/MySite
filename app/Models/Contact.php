<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static $rules = [
        'email'=>   'required|min:4|max:100',
        'subject'=> 'required|min:10|max:100',
        'message'=> 'required|min:10|max:500',
    ];

}


