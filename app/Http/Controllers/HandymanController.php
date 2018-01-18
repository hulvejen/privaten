<?php

namespace App\Http\Controllers;

use App\Handyman;
use Illuminate\Http\Request;

class HandymanController extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Handyman  $handyman
     * @return \Illuminate\Http\Response
     */
    public function show(Handyman $handyman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Handyman  $handyman
     * @return \Illuminate\Http\Response
     */
    public function edit(Handyman $handyman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Handyman  $handyman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Handyman $handyman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Handyman  $handyman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Handyman $handyman)
    {
        //
    }
}
