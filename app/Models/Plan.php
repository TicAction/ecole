<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable =[
        'plan_date',
        'plan_work',
        'plan_page',
    ];

    protected $dates =[
        'plan_date',
        'created_at',
        'updated_at',
    ];
}
