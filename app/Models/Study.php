<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $fillable =[
        'start_date','end_date', 'reading','vocabulary',
        'grammary', 'verbs', 'math', 'english', 'oral', 'history', 'science', 'other','publish','week','mathwork','frenchwork'];
    protected $dates=['start_date','end_date'];

}
