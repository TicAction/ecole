<?php

namespace App\Http\Controllers;

use App\Models\Studies;
use Illuminate\Http\Request;

class StudieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studie = Studies::get();
       

        return view('studies.index', compact('studie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function show(Studies $studies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function edit(Studies $studies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studies $studies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studies  $studies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studies $studies)
    {
        //
    }
}
