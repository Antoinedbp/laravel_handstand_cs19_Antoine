<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
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
        $dataGallery = Gallery::all();
        return view('backoffice.galleries.all', compact('dataGallery'));
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
        $this->authorize("create", Gallery::class);

        request()->validate([
            "img"=>["required"]
        ]);
        
        $gallery = new Gallery();
        $gallery->img = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $gallery->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $this->authorize('edit');
        return view('backoffice.galleries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $this->authorize('edit');
        return view('backoffice.galleries.edit', compact('gallery'));
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
        $this->authorize("update", Classe::class);

        request()->validate([
            "img"=>["required"]
        ]);
        
        Storage::disk("public")->delete("img/" . $gallery->img);
        $gallery->img= $request->file("img")->hashName();
        $request->file("img")->storePublicly("img", "public");
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
        $this->authorize("delete", Gallery::class);

        $gallery->delete();
        return redirect()->back();
    }
}
