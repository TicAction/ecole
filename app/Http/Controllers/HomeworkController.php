<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\Kid;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $homeworks = Homework::with('kids')->get();

        return view ('homeworks.index', compact('homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kids= Kid::orderBy('lastname')->get();
        return view('homeworks.create',compact('kids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homework = Homework::create([
            'homework_name'=>$request->input('homework_name'),
            'homework_date'=>$request->input('homework_date'),
        ]);

        $kids = collect($request->input('kid',[]))->map(function($kid){
            return ['sign' => $kid];
        });
        $homework->kids()->sync($kids);


            return redirect('homework');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     *
     */
    public function show(Homework $homework)
    {
        return view('homeworks.show',compact('homework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit(Homework $homework)
    {
        $kids= Kid::orderBy('lastname')->get();
        return view('homeworks.edit',compact('homework','kids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homework $homework)
    {
        $homework->update([
            'homework_name'=>$request->input('homework_name'),
            'homework_date'=>$request->input('homework_date'),
        ]);

        $kids = collect($request->input('kid',[]))->map(function($kid){
            return ['sign' => $kid];
        });
        $homework->kids()->sync($kids);


        return redirect('homework');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homework $homework)
    {
            $homework->delete();
           $homework->kids()->detach();

        return redirect('homework')->with('success', "Le travail a bien été effacé");
    }
}
