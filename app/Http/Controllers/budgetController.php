<?php

namespace App\Http\Controllers;

use App\budget;
use Illuminate\Http\Request;
use App\Http\Requests\BudgetFormRequest;

class budgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }
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
        return view('budget');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BudgetFormRequest $request)
    {
      dd($request->file('attached'));
      foreach ($request->attached as $image) {
        $filename = $image->store('images');
        images::create([
          'budget_id' => $budget->id,
          'image_dir' => $filename
        ]);
      }
        $slug = uniqid();
        $budget = budget::create($request->all());
        $budget = new budget(array(
          'title' => $request->get('title'),
          'description' => $request->get('description'),
          'slug' => $slug
        ));
        $budget->save();

        //
                return redirect('/presupuesto')->with('status', 'Su presupuesto ha sido recibido, su id única es ' . $slug);
                // return redirect('/');

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
//    public function send_budget(Request $request)
// {
//   $title = $request->file('Archivo');
//   dd($file);
//   $input = $request->all();
//
//   \App\Client::create($input);
//
//   return view('home');
// }
// public function send_file($value='')
// {
//   // code...
// }
