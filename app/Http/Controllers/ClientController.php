<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $dataClient = Client::all();
        $profil = Auth::user();
        return view('backoffice.clients.all', compact('dataClient', 'profil'));
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
        return view('backoffice.clients.create', compact('profil'));
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
            "avis"=>["required"],
            "signature"=>["required"],
            "description"=>["required"]
        ]);
        
        $client = new Client();
        $client->avis = $request->avis;
        $client->signature = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $client->description = $request->description;
        $client->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.clients.show', compact('client', 'profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $this->authorize('manager');
        $profil = Auth::user();
        return view('backoffice.clients.edit', compact('client', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

        request()->validate([
            "signature"=>["required"],
            "avis"=>["required"],
            "description"=>["required"]
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $client->signature);
            $client->signature= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $client->avis = $request->avis;
        $client->description = $request->description;
        $client->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $this->authorize('manager');

        $client->delete();
        return redirect()->back();
    }
}
