<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{

    use HasFactory;
    protected $fillable = ['homework_name','homework_date'];
    protected $dates =['homework_date','created_at','updated_at'];
    protected $table ='homeworks';

    public function Kids()
    {

        return $this->belongsToMany(Kid::class)->withPivot('sign');
    }

}
