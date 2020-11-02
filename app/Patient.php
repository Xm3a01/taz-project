<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name'  , 'age' , 'phone'];

    public function user()
    {
        return $this->morphOne(User::class , 'userable');
    }
}
