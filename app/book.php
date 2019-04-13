<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = "books";
    protected $fillable = [
        'name', 
        'publishing_company', 
        'weight', 
        'size', 
        'author', 
        'pages',
        'image',
        'price', 
        'publishing_year', 
        'description', 
        'cate_id', 
        'sup_id'
    ];
    public $timestamps = true;

    public function category() {
    	return $this->belongsTo('App\category', 'cate_id', 'id');
    }
    
    public function supplier() {
    	return $this->belongsTo('App\supplier', 'sup_id', 'id');
    }

    public function order() {
        return $this->belongsToMany('App\order','oderdetails');
    }
}
