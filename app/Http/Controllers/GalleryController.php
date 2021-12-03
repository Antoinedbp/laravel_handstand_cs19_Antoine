<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataGallery = Gallery::all();
        $profil = Auth::user();
        return view('backoffice.galleries.all', compact('dataGallery', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.galleries.create', compact('profil'));
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
            "img"=>["required"]
        ]);
        
        $gallery = new Gallery();
        $gallery->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img/portfolio/', 'public');
        $gallery->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $id)
    {
        $this->authorize('manager');
        $gallery = $id;
        $profil = Auth::user();
        return view('backoffice.galleries.show', compact('gallery', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.galleries.edit', compact('gallery', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {

        request()->validate([
            "img"=>["required"]
        ]);
        Storage::disk("public")->delete("img/portfolio/".$gallery->img);
        $gallery->img= $request->file("img")->hashName();
        $request->file("img")->storePublicly("img/portfolio/", "public");
        $gallery->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $this->authorize('manager');

        $gallery->delete();
        return redirect()->back();
    }
}
