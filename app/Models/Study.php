<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $fillable =[
        'start_date','end_date', 'reading','vocabulary',
        'grammary', 'verbs', 'math', 'english', 'oral', 'history', 'science', 'autre','publish','week'
    ];
    protected $dates=['start_date','end_date'];

}
