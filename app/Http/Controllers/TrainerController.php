<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
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
        $dataTrainer = Trainer::all();
        return view('backoffice.trainers.all', compact('dataTrainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Trainer::class);

        request()->validate([
            "img"=>["required"],
            "nom"=>["required"],
            "logo1"=>["required"],
            "logo2"=>["required"],
            "logo3"=>["required"],
            "logo4"=>["required"],
        ]);
        
        $trainer = new Trainer();
        $trainer->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $trainer->nom = $request->nom;
        $trainer->logo1 = $request->logo1;
        $trainer->logo2 = $request->logo2;
        $trainer->logo3 = $request->logo3;
        $trainer->logo4 = $request->logo4;
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
        $this->authorize('edit');
        return view('backoffice.trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        $this->authorize('edit');
        return view('backoffice.trainers.edit', compact('trainer'));
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
        $this->authorize("update", Trainer::class);

        request()->validate([
            "img"=>["required"],
            "nom"=>["required"],
            "logo1"=>["required"],
            "logo2"=>["required"],
            "logo3"=>["required"],
            "logo4"=>["required"],
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $trainer->img);
            $trainer->img= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $trainer->nom = $request->nom;
        $trainer->logo1 = $request->logo1;
        $trainer->logo2 = $request->logo2;
        $trainer->logo3 = $request->logo3;
        $trainer->logo4 = $request->logo4;
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
        $this->authorize("delete", Trainer::class);

        $trainer->delete();
        return redirect()->back();
    }
}
