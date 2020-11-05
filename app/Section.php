<?php

namespace App;

use App\Hospital;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name' , 'hospital_id'];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
