<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataTrainer = Trainer::all();
        $profil = Auth::user();
        $icons = Icon::all();
        return view('backoffice.trainers.all', compact('dataTrainer', 'profil', 'icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        $trainer = Trainer::all();
        $profil = Auth::user();
        $icons = Icon::all();
        return view('backoffice.trainers.create', compact('trainer', 'profil', 'icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            "img"=>["required"],
            "nom"=>["required"],
            "role_id"=>["required"]
        ]);
        
        $trainer = new Trainer();
        $trainer->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $trainer->nom = $request->nom;
        $trainer->role_id = $request->role_id;
        $trainer->save();
        return redirect('/');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        $icons = Icon::all();
        return view('backoffice.trainers.show', compact('trainer', 'profil', 'icons'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        $icons = Icon::all();
        return view('backoffice.trainers.edit', compact('trainer', 'profil', 'icons'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        
        request()->validate([
            "img"=>["required"],
            "nom"=>["required"],
            "role_id"=>["required"]
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $trainer->img);
            $trainer->img= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $trainer->nom = $request->nom;
        $trainer->role_id = $request->role_id;
        $trainer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $this->authorize('manager');

        $trainer->delete();
        return redirect()->back();
    }
}
