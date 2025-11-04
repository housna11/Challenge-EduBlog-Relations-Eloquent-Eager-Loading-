<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\serviceDetail;

class service extends Model
{
    use HasFactory;
     protected $fillable=[
        'title',
        'description',
        'duration',
        'price',
        'image',
    ];

    // public function booking(){
    // return $this->hasMany(booking::class);
    // }
    public function detailservice(){
        return $this ->hasOne(serviceDetail::class);
    }

    public function bookings()
    {
         return $this->belongsToMany(booking::class,'services_booking');
    }

}

