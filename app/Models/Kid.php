<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Homework;

class Kid extends Model
{
    use HasFactory;
    protected $fillable =['firstname','lastname'];

    public function observation()
    {
        return $this->hasMany(Observation::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }
//    public function homeworks()
//    {
//        return $this->belongsToMany(Homework::class)->withPivot('signature');
//    }

    public function homeworks()
    {
        return $this->belongsToMany(Homework::class, 'achivement_homework_kid');
    }
    public function achivements()
    {
        return $this->belongsToMany(Achivement::class, 'achivement_homework_kid');
    }

}
