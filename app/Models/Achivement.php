<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achivement extends Model
{
    use HasFactory;

    public function kids()
    {
        return $this->belongsToMany(Kid::class,'achivement_homework_kid');
    }

    public function homeworks()
    {
        return $this->belongsToMany(Homework::class,'achivement_homework_kid');
    }
}
