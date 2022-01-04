<?php

namespace App\Http\Controllers\api;

use App\Bio;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @return array
     */
    public function store(Request $request)
    {
        $bio = Bio::all()->first();

        if($bio === null) {
            $bio = new Bio;
        } else {
            $bio = Bio::all()->first();
        }

        $bio->user_id = Auth::user()->id;
        $bio->bio = $request->bio;
        $bio->save();

        return (['message' => 'Bio is gewijzigd!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function show(Bio $bio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function edit(Bio $bio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bio $bio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bio  $bio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $request->delete();
    }
}
