<?php

namespace App\Http\Controllers;

use App\budget;
use Illuminate\Http\Request;

class budgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function send_file(Request $request)
 {
 $file = $request->file('file');
 dd($file);
 }
    // public function send_file($value='')
    // {
    //   // code...
    // }
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
     * @param  \App\budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(budget $budget)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(budget $budget)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, budget $budget)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(budget $budget)
    {
        //
    }
}
