<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAcceuilAdminRequest;
use App\Http\Requests\UpdatePagesAdminRequest;
use App\Models\pages;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

    public function index() {
        $pages = DB::table('pages')->first();
        return view('admin.pannelAdmin',compact('pages'));
    }

    public function showUpdatePage( $idPage ) {

        $pages = DB::table('pages')->where('id', $idPage)->first();
        return view('admin.pannelAdmin',compact('pages'));

    }

    public function showUpdateAcceuil() {

        $bandes = DB::table('acceuils')->get();
        return view('admin.acceuilAdmin', compact('bandes'));

    }

    public function showContact() {

        $messages = DB::table('contacts')->get();
        return view('admin.contactAdmin', compact('messages'));

    }

    public function storePages(UpdatePagesAdminRequest $request) {

        $pageId=$request->id;
        $data=array('update_by'=>Auth::user()->name, 'content'=>$request->contenu, 'updated_at'=>date("Y-m-d H:i:s"));

        DB::table('pages')
            ->where('id', $pageId)
            ->increment('version', 1, $data);

        flashy()->success('Save is OK');

        return redirect()->back();
    }

    public function storeAcceuil(UpdateAcceuilAdminRequest $request) {

        $pageId=$request->id;
        $data=array('update_by'=>Auth::user()->name, 'contenue'=>$request->contenu, 'updated_at'=>date("Y-m-d H:i:s"));

        DB::table('acceuils')
            ->where('id', $pageId)
            ->increment('version', 1, $data);

        flashy()->success('Save is OK');

        return redirect()->back();
    }


}
