<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function Kids()
    {
        return $this->belongsToMany(Kid::class)->withPivot('signature');
    }

}
