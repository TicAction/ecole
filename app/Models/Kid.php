<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function homeworks()
    {
        return $this->belongsToMany(Homework::class)->withPivot('sign');
    }


}
