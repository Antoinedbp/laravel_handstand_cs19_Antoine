<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Classe;
use App\Models\ClasseTag;
use App\Models\ClasseUser;
use App\Models\Pricing;
use App\Models\Schedule;
use App\Models\Statut;
use App\Models\Tag;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\Email as MailEmail;


class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('coach');
        $classes = Classe::orderBy('prioritaire', 'DESC')->get();
        $dataClasse = Classe::all();
        $profil = Auth::user();
        return view('backoffice.classes.all', compact('classes', 'dataClasse', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inscription(Classe $id){
        
        $classe = $id;
        $allClassesForUser = DB::table('classe_user')
                            ->select('classe_id', 'user_id')
                            ->where([
                                ['user_id', '=', Auth::user()->id],
                                ['classe_id', '=', $classe->id]
                            ])
                            ->get();
        // dd($classe);
        if($allClassesForUser->count() == 0){

            $classeUser = new ClasseUser();
            $classeUser->user_id = Auth::user()->id;
            $classeUser->classe_id = $classe->id;
            $classeUser->save();
            Mail::to(Auth::user()->email)->send(new MailEmail($classe));

        }else{
            return redirect()->back()->with('errors', 'You have been already registered to classe: '  .  $classe->title . ' with classe ID: ' . $classe->id);
        }
            return redirect()->back()->with('message', 'You have succesfully booked class: '   .  $classe->title . ' with classe ID: ' . $classe->id);
    }

    public function create()
    {
        $this->authorize('coach');
        $classes = Classe::all();
        $tags = Tag::all();
        $classe_tag = ClasseTag::all();
        $categories = Categorie::all();
        $schedules = Schedule::all();
        $trainers = Trainer::all();
        $pricings = Pricing::all();
        $profil = Auth::user();
        return view('backoffice.classes.create', compact('classes', 'tags', 'classe_tag', 'categories', 'schedules', 'trainers', 'pricings', 'profil'));
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
            "titre"=>["required"],
            "pricing_id"=>["required"],
            "trainer_id"=>["required"],
            "schedule_id"=>["required"],
            "categorie_id"=>["required"],
        ]);
        
        $classe = new Classe();
        $classe->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img/class/', 'public');
        $classe->titre = $request->titre;
        $classe->pricing_id = $request->pricing_id;
        $classe->schedule_id = $request->schedule_id;
        $classe->trainer_id = Auth::user()->id;
        $classe->categorie_id = $request->categorie_id;
        $classe->prioritaire = $request->prioritaire;
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
        $profil = Auth::user();
        $pricings = Pricing::all();
        return view('backoffice.classes.show', compact('profil', 'classe', 'pricings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit(Classe $classe)
    {
        $this->authorize('coach');
        $tags = Tag::all();
        $profil = Auth::user();
        $categories = Categorie::all();
        return view('backoffice.classes.edit', compact('classe', 'tags', 'profil', 'categories'));
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

        request()->validate([
            "titre"=>["required"],
            "pricing_id"=>["required"],
            "trainer_id"=>["required"],
            "categorie_id"=>["required"],
            "schedule_id"=>["required"],
            "prioritaire"=>["required"],
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/class/" . $classe->img);
            $classe->img= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $classe->titre = $request->titre;
        $classe->pricing_id = $request->pricing_id;
        $classe->trainer_id = $request->trainer_id;
        $classe->schedule_id = $request->schedule_id;
        $classe->categorie_id = $request->categorie_id;
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
        $this->authorize('admin');
        $classe->delete();
        return redirect()->back();
    }
}
