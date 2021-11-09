<?php

namespace App\Http\Controllers;

use App\Pemetaan;
use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pemetaan',[
            'title' => 'Pemetaan | Kopi Tani',
            'menu1' => 'Dashboard',
            'menu2' => 'Pemetaan',
            'menu3' => 'Result',
            'menu4' => 'Pemetaan'
           
        ]);
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
     * @param  \App\Pemetaan  $pemetaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemetaan $pemetaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemetaan  $pemetaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemetaan $pemetaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemetaan  $pemetaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemetaan $pemetaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemetaan  $pemetaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemetaan $pemetaan)
    {
        //
    }
}
