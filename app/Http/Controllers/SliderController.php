<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->authorize('manager');
        $dataSlider = Slider::orderBy('prioritaire', 'desc')
                            ->get();
        $profil = Auth::user();
        return view('backoffice.sliders.all', compact('dataSlider', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        $dataSlider = Slider::orderBy('prioritaire', 'desc')
                            ->get();
        $profil = Auth::user();
        return view('backoffice.sliders.create', compact('profil'));
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
            "petit_titre"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "btn"=>["required"],
            "prioritaire"=>["required"],
        ]);

        $sliders = Slider::all();
        
        $slider = new Slider();
        $slider->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img/slider/', 'public');
        $slider->petit_titre = $request->petit_titre;
        $slider->titre = $request->titre;
        $slider->description = $request->description;
        $slider->btn = $request->btn;
        $slider->prioritaire = $request->prioritaire;
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
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.sliders.show', compact('slider', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.sliders.edit', compact('slider', 'profil'));
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

        request()->validate([
            "petit_titre"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "btn"=>["required"],
            "prioritaire"=>["required"]
        ]);
        
        if($request->file('img') !== null){
            
            Storage::disk('public')->delete('img/slider/'.$slider->img);
            $slider->img = $request->file('img')->hashName();
            $request->file('img')->storePublicly('img/slider/', 'public');
        }
        $slider->petit_titre = $request->petit_titre;
        $slider->titre = $request->titre;
        $slider->description = $request->description;
        $slider->btn = $request->btn;
        $slider->prioritaire = $request->prioritaire;
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
        $slider->delete();
        return redirect()->back();
    }
}
