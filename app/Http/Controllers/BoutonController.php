<?php

namespace App\Http\Controllers;

use App\Models\Bouton;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoutonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataBtn = Bouton::all();
        $profil = Auth::user();
        return view('backoffice.boutons.all', compact('dataBtn', 'profil'));
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
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function show(Bouton $bouton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function edit(Bouton $bouton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bouton $bouton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bouton $bouton)
    {
        //
    }
}
