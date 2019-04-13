<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'id', 
        'name', 
    ];
    public $timestamps = true;

    public function book() {
    	return $this->hasMany('App\book');
    }
}
