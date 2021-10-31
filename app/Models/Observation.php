<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    protected $fillable=['observation_date','content','period','kid_id'];
    protected $dates=['observation_date'];

    public function kid()
    {
        return $this->belongsTo(Kid::class,'kid_id','id');
    }
}
