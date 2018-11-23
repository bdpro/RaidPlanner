<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\web_agency_fail;
use DB;

class web_agency_failsController extends Controller
{
    
    public function index(){
        /***Requête pour afficher les messages stockés***/
        
        /***Jointure***/
        $wafs = DB::table('web_agency_fails')
            ->join('users','web_agency_fails.id_user','=','users.id')
            ->select('web_agency_fails.*', 'users.name')
            ->get();
        /***Fin jointure***/
        
        return view('webagencyfail.index')->with('wafs', $wafs);
        
    }

    
    public function store (Request $request)
    {
        /***Requête pour récupérer les messages du formulaire et les stocker***/
        $this->validate($request, [
            
            'titre'=>'required',
            'texte'=>'required'
        ]);
        
        $input =$request->all();
        
        web_agency_fail::create($input);
        
        return redirect()->back();
    }

}


