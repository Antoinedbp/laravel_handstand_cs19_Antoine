<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataNav = Navbar::all();
        $profil = Auth::user();
        return view('backoffice.header.all', compact('dataNav', 'profil'));
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
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.header.show', compact('navbar', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.header.edit', compact('navbar', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {

        request()->validate([
            "nom1"=>["required"],
            "nom2"=>["required"],
            "nom3"=>["required"],
            "nom4"=>["required"],
            "nom5"=>["required"],
            "nom6"=>["required"],
        ]);
        
        if ($request->file('logo') !== null) {
            Storage::disk("public")->delete("img/logo/" . $navbar->logo);
            $navbar->logo= $request->file("logo")->hashName();
            $request->file("logo")->storePublicly("img/logo/", "public");
        }
        $navbar->nom1 = $request->nom1;
        $navbar->nom2 = $request->nom2;
        $navbar->nom3 = $request->nom3;
        $navbar->nom4 = $request->nom4;
        $navbar->nom5 = $request->nom5;
        $navbar->nom6 = $request->nom6;
        $navbar->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('manager');
        $navbar= Navbar::find($id);
        $navbar->delete();
        return redirect()->back();
    }
}
