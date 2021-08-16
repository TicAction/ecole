<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable=['date_exam','name','manuel','description','notion'];
    protected $dates=['created_date','updated_date','date_exam'];
}
