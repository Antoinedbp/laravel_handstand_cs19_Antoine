<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classe;
use App\Models\ClasseUser;
use App\Models\Client;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Icon;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Profil;
use App\Models\Schedule;
use App\Models\Slider;
use App\Models\Titre;
use App\Models\Trainer;
use App\Models\User;
use GuzzleHttp\Psr7\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        $headers = Navbar::all();
        $sliders = Slider::orderBy('prioritaire', 'desc')
                        ->get();
        $abouts = About::all();
        $classes = Classe::orderBy('prioritaire', 'desc')
                        ->take(3)
                        ->get();
        $schedules = Schedule::all();
        $trainers = Trainer::all();
        $icons = Icon::all();
        $galleris = Gallery::take(6)->inRandomOrder()->get();
        $events = Event::orderBy('prioritaire', 'desc')
                        ->get();
        $pricings = Pricing::all();
        $clients = Client::all();
        $maps = Map::all();
        $newsletters = Newsletter::all();
        $footers = Footer::all();
        $allInscriptions = DB::table('classe_user')
                            ->selectRaw('count(user_id) as  users , classe_id')
                            ->groupBy('classe_id')
                            ->get();
        $allClasses = DB::table('classes')
                    ->select('id', 'titre', 'schedule_id', 'trainer_id')
                    ->get();
        $allTrainers = DB::table('trainers')
                        ->where('role_id', '3')
                        ->get()
                        ->random(2);
        $trainer1 = DB::table('trainers')
                        ->where('role_id', 2)
                        ->get();
        $allTrainers->splice(1, 0, [$trainer1[0]]);
        $profil = Profil::all();
        return view('pages.main', compact('titres', 'headers', 'sliders', 'abouts', 'classes', 'schedules', 'trainers', 'icons', 'galleris', 'events', 'pricings', 'clients', 'maps', 'newsletters', 'footers', 'allInscriptions', 'allClasses', 'allTrainers', 'profil'));
    }

    public function inscription(Classe $classe, User $user){
        $this->authorize("inscription", Classe::class);
        $allClassesForUser = DB::table('classe_user')
                            ->select('classe_id', 'user_id')
                            ->where([
                                ['user_id', '=', $user->id],
                                ['classe_id', '=', $classe->id]
                            ])
                            ->get();

        if($allClassesForUser->count() == 0){

            $classeUser = new ClasseUser();
            $classeUser->classe_id = $classe->id;
            $classeUser->user_id = $user->id;
            $classeUser->save();
        }else{
            // echo ("<script>alert('You have already registered to this class');</script>");
            return redirect()->back()->with('error', 'You have been already registered to classe: '  .  $classe->title . ' with classe ID: ' . $classe->id);
        }
            return redirect()->back()->with('message', 'You have succesfully booked class: '   .  $classe->title . ' with classe ID: ' . $classe->id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
