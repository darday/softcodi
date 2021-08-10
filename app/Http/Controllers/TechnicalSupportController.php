<?php

namespace App\Http\Controllers;

use App\Models\Technical_support;
use Illuminate\Http\Request;

class TechnicalSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('technical_support.maintenance_pcs');
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
     * @param  \App\Models\Technical_support  $technical_support
     * @return \Illuminate\Http\Response
     */
    public function show(Technical_support $technical_support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Technical_support  $technical_support
     * @return \Illuminate\Http\Response
     */
    public function edit(Technical_support $technical_support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Technical_support  $technical_support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technical_support $technical_support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Technical_support  $technical_support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technical_support $technical_support)
    {
        //
    }
}
