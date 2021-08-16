<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class PexamController extends Controller
{
    public function show(Exam $exam)
    {

        return view('pexams.show',compact('exam'));
    }
}
