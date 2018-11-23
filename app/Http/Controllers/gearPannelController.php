<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage;
use App\User;
use App\Categorie;
use DB;

class gearPannelController extends Controller
{
    public function index(){
        //Query des personnages
        $personnages = Personnage::all();
        
        //Query des users
        $users = User::all();
        
        //Query des categories
        $cats = Categorie::all();

        //Affichage de la vue avec les données
        return view('gearpannel.index', ['personnages' => $personnages], ['cats' => $cats]);
    }
    
    public function update()
    {
        DB::table('personnages')
            ->where('id_user', Auth::id())
            ->update(['arme_bis' => gearpannel::get('arme')], 
                     ['auxiliaire_bis' => gearpannel::get('auxiliaire')], 
                     ['tete_bis' => gearpannel::get('tete')], 
                     ['torse_bis' => gearpannel::get('torse')], 
                     ['main_bis' => gearpannel::get('main')], 
                     ['ceinture_bis' => gearpannel::get('ceinture')], 
                     ['jambe_bis' => gearpannel::get('jambe')], 
                     ['pied_bis' => gearpannel::get('pied')], 
                     ['collier_bis' => gearpannel::get('collier')], 
                     ['boucle_oreille_bis' => gearpannel::get('boucle_oreille')], 
                     ['bracelet_bis' => gearpannel::get('bracelet')], 
                     ['bague_1_bis' => gearpannel::get('bague_1')], 
                     ['bague_2_bis' => gearpannel::get('bague_2')]);
    }
}
