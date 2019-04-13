<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = "suppliers";
    protected $fillable = [
        'id', 
        'name', 
    ];
    public $timestamps = true;

     public function book() {
    	return $this->hasMany('App\book');
    }
}
