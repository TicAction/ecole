<?php

namespace App\Http\Controllers;

use App\Models\Observation;
use App\Models\Kid;
use Illuminate\Http\Request;

class ObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $observations = Observation::all();
        return view('observations.index',compact('observations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kids =Kid::all();

        return view('observations.create', compact('kids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Observation::create([
            'observation_date'=> request('observation_date'),
            'content'=> request('content'),
            'kid_id'=> request('kid_id'),
            'period'=> request('period'),
        ]);

        return redirect('kid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Observation  $observation
     * @return \Illuminate\Http\Response
     */
    public function show(Observation $observation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Observation  $observation
     * @return \Illuminate\Http\Response
     */
    public function edit(Observation $observation)
    {
        return view('observations.edit',compact('observation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Observation  $observation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Observation $observation)
    {
        Observation::update([
            'observation_date'=> request('observation_date'),
            'content'=> request('content'),
            'kid_id'=> request('kid_id'),
            'period'=> request('period'),
        ]);

        return redirect('kid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Observation  $observation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Observation $observation)
    {
        //
    }
}
