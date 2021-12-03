<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataAbout = About::all();
        $profil = Auth::user();
        return view('backoffice.about.all', compact('dataAbout', 'profil'));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('manager');
        $about = About::find($id);
        $profil = Auth::user();
        return view('backoffice.about.show', compact('about', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('manager');
        $about = About::find($id);
        $profil = Auth::user();
        return view('backoffice.about.edit', compact('about', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            "titre"=>["required"],
            "description_1"=>["required"],
            "description_2"=>["required"],
            "btn"=>["required"],
            "img_video"=>["required"],
            "video"=>["required"],
        ]);
        $about = About::find($id);
        $about->titre = $request->titre;
        $about->description_1 = $request->description_1;
        $about->description_2 = $request->description_2;
        $about->btn = $request->btn;
        $about->img_video = $request->img_video;
        $about->video = $request->video;
        $about->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
