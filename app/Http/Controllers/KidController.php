<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kids = Kid::orderBy('lastname','asc')->get();

        return view('kids.index',compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kid::create($request->all());
        return redirect('kid')->with('success','La nouvelle observation a été créée avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function show(kid $kid)
    {


        return view('kids.show',compact('kid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function edit(Kid $kid)
    {

        return view('kids.edit',compact('kid'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kid $kid)
    {
        $kid->update($request->all());
        return redirect('kid')->with('success','Modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kid  $kid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kid $kid)
    {

        $kid->delete();
        $kid->homeworks()->detach();
        return redirect('kid')->with('success', "L'élève a bien été effacé");
    }
}
