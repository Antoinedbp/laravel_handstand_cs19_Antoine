<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataFooter = Footer::all();
        $profil = Auth::user();
        return view('backoffice.footers.all', compact('dataFooter', 'profil'));
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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.footers.show', compact('footer', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.footers.edit', compact('footer', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {

         request()->validate([
            "description"=>["required"],
            "mail"=>["required"],
            "tel"=>["required"],
            "adress"=>["required"],
            "titre_1"=>["required"],
            "tweet_1"=>["required"],
            "site_1"=>["required"],
            "tweet_2"=>["required"],
            "site_2"=>["required"],
            "btn"=>["required"],
            "copyright"=>["required"],
        ]);
        
        if ($request->file('logo') !== null) {
            Storage::disk("public")->delete("img/logo/" . $footer->logo);
            $footer->logo= $request->file("logo")->hashName();
            $request->file("logo")->storePublicly("img/logo/", "public");
        }
        $footer->description = $request->description;
        $footer->mail = $request->mail;
        $footer->tel = $request->tel;
        $footer->adress = $request->adress;
        $footer->titre_1 = $request->titre_1;
        $footer->tweet_1 = $request->tweet_1;
        $footer->site_1 = $request->site_1;
        $footer->tweet_2 = $request->tweet_2;
        $footer->site_2 = $request->site_2;
        $footer->btn = $request->btn;
        $footer->copyright = $request->copyright;
        $footer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $this->authorize('manager');
        $footer->delete();
        return redirect()->back();
    }
}
