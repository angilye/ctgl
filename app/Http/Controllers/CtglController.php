<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contacts;

class CtglController extends Controller
{
    public function home()
    {
        $bandes = DB::table('acceuils')->get();
        return view('Acceuil', compact('bandes'));
    }

    public function presentation()
    {
        $pages = DB::table('pages')->where('id',1)->first();
        return view('layouts.presentation', compact('pages'));
    }

    public function activite()
    {
        $pages = DB::table('pages')->where('id',2)->first();
        return view('layouts.activite', compact('pages'));
    }

    public function evenement()
    {
        return view('layouts.evenement');
    }

    public function adherer()
    {
        $pages = DB::table('pages')->where('id',4)->first();
        return view('layouts.adherer', compact('pages'));
    }

    public function contact()
    {
        $pages = DB::table('pages')->where('id',5)->first();
        return view('layouts.Contact', compact('pages'));
    }

    public function store (ContactRequest $request)
    {
        $contact = new contacts;
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->motif = $request->motif;
        $contact->message = $request->msg;

        $contact->save(); // sauvegarde des données sur la DB.

        flashy()->success("Your message it's send");

        return redirect()->route('home_path');
    }
}
