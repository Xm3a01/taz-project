<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name' , 'phone_number' , 'gender'];

    public function user()
    {
        return $this->morphOne(User::class , 'userable');
    }
}
