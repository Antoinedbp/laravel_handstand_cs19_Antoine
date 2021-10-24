<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Classe;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::orderBy('prioritaire', 'DESC')->get();
        $dataClasse = Classe::all();
        return view('backoffice.classes.all', compact('classes', 'dataClasse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Classe::class);

        request()->validate([
            "img"=>["required"],
            "titre"=>["required"],
            "package"=>["required"],
            // "trainer_id"=>["required"],
            "time"=>["required"],
            "date"=>["required"],
            // "categorie_id"=>["required"],
        ]);
        
        $classe = new Classe();
        $classe->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $classe->titre = $request->titre;
        $classe->package = $request->package;
        // $classe->trainer_id = $request->trainer_id;
        $classe->time = $request->time;
        $classe->date = $request->date;
        // $classe->categorie_id = $request->categorie_id;
        $classe->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        $this->authorize('edit');
        return view('backoffice.classes.show', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        // $this->authorize('edit');
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('backoffice.classes.edit', compact('classe', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classe $classe)
    {
        $this->authorize("update", Classe::class);

        request()->validate([
            "titre"=>["required"],
            "package"=>["required"],
            // "trainer_id"=>["required"],
            "time"=>["required"],
            "date"=>["required"],
            // "categorie_id"=>["required"],
            "prioritaire"=>["required"],
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $classe->img);
            $classe->img= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $classe->titre = $request->titre;
        $classe->package = $request->package;
        // $classe->trainer_id = $request->trainer_id;
        $classe->time = $request->time;
        $classe->date = $request->date;
        // $classe->categorie_id = $request->categorie_id;
        $classe->prioritaire = $request->prioritaire;
        $classe->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classe $classe)
    {
        $this->authorize("delete", Classe::class);

        $classe->delete();
        return redirect()->back();
    }
}
