<?php

namespace App\Http\Controllers;

use App\Mail\ClassMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ClassMailController extends Controller
{
    public  function  classMail(Request  $request)
    {

        $contenuClassMail =  [
            "name"  =>  $request->name,
            "classe"  =>  $request->classe,
            "date"  =>  $request->date,
        ];
        Mail::to(Auth::user()->email)->send(new ClassMail($contenuClassMail));

        return redirect()->back()->with("message", "le mail a bien été envoyé");
    }
}
