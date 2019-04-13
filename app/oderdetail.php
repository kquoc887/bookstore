<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oderdetail extends Model
{
    protected $table = "oderdetails";
    protected $fillable = [
        'order_id'
        'book_id', 
    ];
}
