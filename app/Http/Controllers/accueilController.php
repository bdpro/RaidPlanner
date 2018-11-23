<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class accueilController extends Controller
{
    public function index(){
        
        /********Jointure***********/
        $wafs = DB::table('web_agency_fails')
            ->join('users','web_agency_fails.id_user','=','users.id')
            ->select('web_agency_fails.*', 'users.name')
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get();
        
        $blogs = DB::table('blogs')
            ->join('events','blogs.id_event','=','events.id')
            ->join('users','blogs.id_user','=','users.id')
            ->select('blogs.*', 'events.nom_raid')
            ->orderBy('created_at','desc')
            ->limit(2)
            ->get();
        /**********Fin jointure ********/
        
        return view('accueil.index', ['wafs' => $wafs], ['blogs' => $blogs]);        
    }
}
