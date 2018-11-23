<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\inscriptions;
use DB;

class RaidController extends Controller
{
    public function index() {
        $raids = Event::all();
        
        $idRaid = request()->id;
        
        /***Jointure***/
        $inscrit = DB::table('events')
            ->join('inscriptions','events.id','=','inscriptions.id_event')
            ->join('users','inscriptions.id_user', '=', 'users.id')
            ->select('inscriptions.*', 'users.name')
            ->where('events.id', '=', $idRaid)
            ->get();
        /***Fin jointure***/
        

        //Affichage de la vue avec les données
        return view('raidplanner.raid', ['raids' => $raids], ['idRaid' => $idRaid])->with('inscrit', $inscrit);
    }
    
    
    public function store (Request $request){
        /***Requête pour récupérer les messages du formulaire et les stocker***/
        $this->validate($request, [
            'job'=>'required',
            'date_inscription'=>'required',
            'id_event'=>'required',
            'id_user'=>'required',
        ]);
        
        $input =$request->all();
        
        inscriptions::create($input);
        
        return redirect()->back();
    }
}
