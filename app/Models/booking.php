<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'date',
        'time',
        'status',

    ];

    // public function service(){
    //     return $this->belongsTo(service::class);
    // }
    public function service() {
       return $this->belongsToMany(service::class,'services_booking');
    }
}
