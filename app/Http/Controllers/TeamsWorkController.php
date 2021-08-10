<?php

namespace App\Http\Controllers;

use App\Models\Teams_work;
use Illuminate\Http\Request;

class TeamsWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('teamwork.teamsw');
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
     * @param  \App\Models\Teams_work  $teams_work
     * @return \Illuminate\Http\Response
     */
    public function show(Teams_work $teams_work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams_work  $teams_work
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams_work $teams_work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams_work  $teams_work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teams_work $teams_work)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams_work  $teams_work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams_work $teams_work)
    {
        //
    }
}
