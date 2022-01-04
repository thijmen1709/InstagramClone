<?php

namespace App\Http\Controllers;

use App\Reactie;
use Illuminate\Http\Request;

class ReactieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allreacties= reactie::all();
        return view('/periode/3/blog/blogtest' , ['reacties'=>  $allreacties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/periode/3/blog/blogtest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reactie = new Reactie();
        $reactie->comment = $request->comment;
        $reactie->gebruikersnaam = $request->gebruikersnaam;
        $reactie->save();
        return redirect('/periode/3/blog/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function show(Reactie $reactie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function edit(Reactie $reactie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reactie $reactie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reactie  $reactie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reactie $reactie)
    {
        //
    }
}
