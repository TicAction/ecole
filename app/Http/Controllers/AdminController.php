<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudyRequest;
use App\Models\Admin;
use App\Models\Study;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function index()
    {
        $studies = Study::all();


        return view('admins.index', compact('studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudyRequest $request)
    {


        study::create($request->all());

        return redirect()->route('admins.index')->with('message','La création a bien été fait');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(study $admin)
    {
        $study=$admin;

        return view('admins.show', compact('study'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(study $admin)
    {
        $study=$admin;
        return view('admins.edit',compact('study'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(StudyRequest $request, Study $admin)
    {
        $study=$admin;


        $study->update($request->except(['_token','_method']));

        return redirect()->route('admins.index')->with('success', 'La modification a été fait avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $admin)
    {
        $study=$admin;
        $study->delete();
        return redirect()->route('admins.index')->with('success', 'La feuille de devoir a bien été supprimer');
    }
}
