<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataEvent = Event::all();
        return view('backoffice.events.all', compact('dataEvent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->authorize("create", Event::class);

        request()->validate([
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "time"=>["required"],
        ]);
        
        $event = new Event();
        $event->titre = $request->titre;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
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
        $this->authorize('edit');
        return view('backoffice.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $this->authorize('edit');
        return view('backoffice.events.edit', compact('event'));
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
        $this->authorize("update", Event::class);

        request()->validate([
            "titre"=>["required"],
            "description"=>["required"],
            "date"=>["required"],
            "time"=>["required"],
        ]);
        
        $event->titre = $request->titre;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->time = $request->time;
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
        $this->authorize("delete", Event::class);

        $event->delete();
        return redirect()->back();
    }
}
