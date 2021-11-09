<?php

namespace App\Http\Controllers;

use App\LoginPage;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login',[
            'title' => 'Log in'
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
     * @param  \App\LoginPage  $loginPage
     * @return \Illuminate\Http\Response
     */
    public function show(LoginPage $loginPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoginPage  $loginPage
     * @return \Illuminate\Http\Response
     */
    public function edit(LoginPage $loginPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoginPage  $loginPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoginPage $loginPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoginPage  $loginPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginPage $loginPage)
    {
        //
    }
}
