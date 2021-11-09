<?php

namespace App\Http\Controllers;

use App\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petani',[
            'title' => 'Petani | Kopi Tani',
            'menu1' => 'Dashboard',
            'menu2' => 'Petani',
            'menu3' => 'Created Petani',
            'menu4' => 'Petani'
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
     * @param  \App\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function show(Petani $petani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function edit(Petani $petani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petani $petani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petani $petani)
    {
        //
    }
}
