<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = "orders";
    protected $fillable = [
        'date', 
        'quantity', 
        'total', 
        'user_id', 
    ];
    public $timestamps = true;

    public function user() {
    	return $this->belongTo('App\user');
    }

    public function book() {
        return $this->belongsToMay('App\book','oderdetails');
    }
}
