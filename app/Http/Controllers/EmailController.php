<?php

namespace App\Http\Controllers;

use App\Mail\Email as MailEmail;
use App\Mail\EmailB;
use App\Models\Email;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('manager');
        $email=Email::all()->toArray();
        $email=array_reverse($email);
        $profil = Auth::user();
        return view('backoffice.mails.all',compact('email', 'profil'));
    }

    public function indexLu()
    {
        // $this->authorize('manager');
        $email=Email::all()->where('lu',1);
        return view('backoffice.mails.all',compact('email'));
    }

    public function indexNonLu()
    {
        // $this->authorize('manager');
        $email=Email::all()->where('lu',0);;
        return view('backoffice.mails.all',compact('email'));
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
        $request->validate([
            "name" => "required",
            "message" => "required",
            "email" => "required",
            "lu"=>"required"
            
            
        ]);
       

        $email=new Email();
        
        $email->name = $request->name;
        $email->email = $request->email;
        $email->message = $request->message;
        $email->lu = 0;
        
        $email->save();
        
         Mail::to('antoinedebassompierre@hotmail.com')->send(new MailEmail($email));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        $this->authorize('manager');
        $email->lu=1;
        $email->save();
        return view('backoffice.mails.show',compact('email'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        $this->authorize('manager');
        $email->delete();
        return redirect()->back();
    }
}