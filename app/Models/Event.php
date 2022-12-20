<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
//
    use HasFactory;

//    protected $with=['user','club'];

    public  function  user(){
        return $this->belongsTo(User::class);
    }
    public function club(){
        return $this->belongsTo(Club::class);
    }
}
