<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSlider = Slider::all();
        return view('backoffice.sliders.all', compact('dataSlider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Slider::class);

        request()->validate([
            "img"=>["required"],
            "petit_titre"=>["required"],
            "titre"=>["required"],
            "description"=>["required"]
        ]);

        $sliders = Slider::all();
        
        $slider = new Slider();
        $slider->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $slider->petit_titre = $request->petit_titre;
        $slider->titre = $request->titre;
        $slider->description = $request->description;
        $slider->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $this->authorize('edit');
        return view('backoffice.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $this->authorize('edit');
        return view('backoffice.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $this->authorize("update", Slider::class);

        request()->validate([
            "img"=>["required"],
            "petit_titre"=>["required"],
            "titre"=>["required"],
            "description"=>["required"]
        ]);
        
        $slider->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $slider->petit_titre = $request->petit_titre;
        $slider->titre = $request->titre;
        $slider->description = $request->description;
        $slider->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->authorize("delete", Slider::class);

        $slider->delete();
        return redirect()->back();
    }
}
