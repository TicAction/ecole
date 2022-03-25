<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $guarded = [];


//    public function Kids()
//    {
//        return $this->belongsToMany(Kid::class)->withPivot('signature');
//    }

    public function kids()
    {
        return $this->belongsToMany(Kid::class, 'achivement_homework_kid');
    }
    public function achivements()
    {
        return $this->belongsToMany(Achivement::class, 'achivement_homework_kid');
    }

}
