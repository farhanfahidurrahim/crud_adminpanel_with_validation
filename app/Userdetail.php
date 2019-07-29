<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    protected $fillable = [
        'name', 'email', 'mobile_number', 'photo', 'address',
    ];
}
