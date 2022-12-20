<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany(User::class,'club_user')->withTimestamps();
    }
    public function events(){
        return $this->hasMany(Event::class);
    }
    public function goals(){
        return $this->hasMany(Goal::class);
    }
    public function announcements(){
        return $this->hasMany(Announcement::class);
    }
}
