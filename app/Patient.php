<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name' , 'user_id' , 'age' , 'phone'];
}
