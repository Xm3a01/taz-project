<?php

namespace App;

use App\Booking;
use App\Section;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = ['name' , 'duity'];

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
