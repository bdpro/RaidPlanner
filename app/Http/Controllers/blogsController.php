<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\event;
use DB;

class blogsController extends Controller
{
    public function index(){
        /***Requête pour afficher les messages stockés***/
        
        /***Jointure***/
        $blogs = DB::table('blogs')
            ->join('events','blogs.id_event','=','events.id')
            ->join('users','blogs.id_user','=','users.id')
            ->select('blogs.*', 'events.nom_raid', 'events.id')
            ->get();
        /***Fin jointure***/
        
        $events = event::pluck('nom_raid', 'id');
        
        return view('blogs.index',['blogs' => $blogs], ['events' => $events]);
        
    }

    
    public function store (Request $request)
    {
        /***Requête pour récupérer les messages du formulaire et les stocker***/
        $this->validate($request, [
            'lien_FFlogs'=>'required',
            'id_event'=>'required',
            'id_user'=>'required'
        ]);
        
        $input =$request->all();
        
       blog::create($input);
        
        return redirect()->back();
    }
}
