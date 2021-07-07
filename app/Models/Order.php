<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['driver_id', 'car_id', 'approval', 'status'];

    public function cars(){
    	return $this->belongsTo(Cars::class, 'car_id', 'id');
    }

    public function drivers(){
    	return $this->belongsTo(Drivers::class, 'driver_id', 'id');
    }
}
