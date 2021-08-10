<?php

namespace App\Http\Controllers;

use App\Models\sales_pc;
use Illuminate\Http\Request;

class SalesPcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sales.sales_accessories');
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
     * @param  \App\Models\sales_pc  $sales_pc
     * @return \Illuminate\Http\Response
     */
    public function show(sales_pc $sales_pc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sales_pc  $sales_pc
     * @return \Illuminate\Http\Response
     */
    public function edit(sales_pc $sales_pc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sales_pc  $sales_pc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sales_pc $sales_pc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sales_pc  $sales_pc
     * @return \Illuminate\Http\Response
     */
    public function destroy(sales_pc $sales_pc)
    {
        //
    }
}
