<?php

namespace App;

use App\User;
use App\Hospital;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name' , 
        'phone_number' , 
        'gender', 
        'hospital_id'
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }


}
