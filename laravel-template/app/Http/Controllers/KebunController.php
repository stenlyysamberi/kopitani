<?php

namespace App\Http\Controllers;

use App\Kebun;
use Illuminate\Http\Request;

class KebunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kebun',[

            'title' => 'Kebun | Kopi Tani',
            'menu1' => 'Dashboard',
            'menu2' => 'Kebun',
            'menu3' => 'Created',
            'menu4' => 'Kebun Tani'

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
     * @param  \App\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function show(Kebun $kebun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebun $kebun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebun $kebun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebun $kebun)
    {
        //
    }
}
