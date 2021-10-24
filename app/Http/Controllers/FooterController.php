<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataFooter = Footer::all();
        return view('backoffice.footers.all', compact('dataFooter'));
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
        // $this->authorize('edit');
        return view('backoffice.footers.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        // $this->authorize('edit');
        return view('backoffice.footers.edit', compact('footer'));
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
         // $this->authorize("update", Footer::class);

         request()->validate([
            "logo"=>["required"],
            "description"=>["required"],
            "logo_mail"=>["required"],
            "mail"=>["required"],
            "logo_tel"=>["required"],
            "tel"=>["required"],
            "logo_adress"=>["required"],
            "adress"=>["required"],
            "titre_1"=>["required"],
            "logo_1"=>["required"],
            "tweet_1"=>["required"],
            "site_1"=>["required"],
            "logo_2"=>["required"],
            "tweet_2"=>["required"],
            "site_2"=>["required"],
            "btn"=>["required"],
            "copyright"=>["required"],
        ]);
        
        $footer->logo = $request->logo;
        $footer->description = $request->description;
        $footer->logo_mail = $request->logo_mail;
        $footer->mail = $request->mail;
        $footer->logo_tel = $request->logo_tel;
        $footer->tel = $request->tel;
        $footer->logo_adress = $request->logo_adress;
        $footer->adress = $request->adress;
        $footer->titre_1 = $request->titre_1;
        $footer->logo_1 = $request->logo_1;
        $footer->tweet_1 = $request->tweet_1;
        $footer->site_1 = $request->site_1;
        $footer->logo_2 = $request->logo_2;
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
        // $this->authorize("delete", Footer::class);
        $footer->delete();
        return redirect()->back();
    }
}
