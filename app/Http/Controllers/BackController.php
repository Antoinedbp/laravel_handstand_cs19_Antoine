<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Classe;
use App\Models\Client;
use App\Models\Event;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Map;
use App\Models\Navbar;
use App\Models\Newsletter;
use App\Models\Pricing;
use App\Models\Profil;
use App\Models\Schedule;
use App\Models\Slider;
use App\Models\Titre;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackController extends Controller
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
        $sliders = Slider::all();
        $abouts = About::all();
        $classes = Classe::all();
        $schedules = Schedule::all();
        $trainers = Trainer::all();
        $galleries = Gallery::all();
        $events = Event::all();
        $pricings = Pricing::all();
        $clients = Client::all();
        $maps = Map::all();
        $newsletters = Newsletter::all();
        $footers = Footer::all();
        $profil = Auth::user();
        return view('pages.mainBO', compact('titres', 'headers', 'sliders', 'abouts', 'classes', 'schedules', 'trainers', 'galleries', 'events', 'pricings', 'clients', 'maps', 'newsletters', 'footers', 'profil'));
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
