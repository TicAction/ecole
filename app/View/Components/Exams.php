<?php

namespace App\View\Components;

use App\Models\Exam;
use Illuminate\View\Component;

class Exams extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $exams = Exam::where('date_exam','>=',date('Y-m-d'))->orderBy('date_exam','ASC')->get();
        return view('components.exams',compact('exams'));
    }
}
