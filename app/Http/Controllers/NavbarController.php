<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataNav = Navbar::all();
        return view('backoffice.header.all', compact('dataNav'));
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
        $this->authorize('edit');
        return view('backoffice.header.show', compact('navbar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit');
        $navbar= Navbar::find($id);
        return view('backoffice.header.edit', compact('navbar'));
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
        $this->authorize("update", Navbar::class);

        request()->validate([
            "logo"=>["required"],
            "nom1"=>["required"],
            "nom2"=>["required"],
            "nom3"=>["required"],
            "nom4"=>["required"],
            "nom5"=>["required"],
        ]);
        
        $navbar->logo = $request->logo;
        $navbar->nom1 = $request->nom1;
        $navbar->nom2 = $request->nom2;
        $navbar->nom3 = $request->nom3;
        $navbar->nom4 = $request->nom4;
        $navbar->nom5 = $request->nom5;
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
        $this->authorize("delete", Navbar::class);
        $navbar= Navbar::find($id);
        $navbar->delete();
        return redirect()->back();
    }
}
