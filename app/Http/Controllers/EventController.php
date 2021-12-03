<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataEvent = Event::all();
        $profil = Auth::user();
        return view('backoffice.events.all', compact('dataEvent', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        return view('backoffice.events.create');
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
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "time"=>["required"],
            "prioritaire"=>["required"],
        ]);
        
        $event = new Event();
        $event->titre = $request->titre;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->prioritaire = $request->prioritaire;
        $event->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.events.show', compact('event', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.events.edit', compact('event', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {

        request()->validate([
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "time"=>["required"],
            "prioritaire"=>["required"],
        ]);
        
        $event->titre = $request->titre;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->prioritaire = $request->prioritaire;
        $event->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $this->authorize('manager');

        $event->delete();
        return redirect()->back();
    }
}
