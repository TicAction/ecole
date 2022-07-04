<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyRequest;
use App\Models\Exam;
use App\Models\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{

    public function exam(Exam $exam)
    {
        dump($exam); exit();
        return view('studies.exam', compact('exam'));
    }

    public function index()
    {

        $studies = Study::where([['start_date','<=', date('Y/m/d')] ,['end_date','>',date('Y/m/d')],['publish','=','on'],['group','=','3R1']])->get();


        return view('studies.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(study $study)
    {


        return view('studies.show', compact('study'));
    }


}
