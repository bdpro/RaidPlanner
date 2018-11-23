<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\personnage;
use App\user;
use App\admin;
use DB;

class UsersController extends Controller
    {
    public function index(){

        $users = DB::table('users')
        ->join('personnages','personnages.id_user','=','users.id')
        ->select('users.*','personnages.id_lodestone')
        ->get();

//        return view('users.index')->with('users', $users);
        return view('users.index', ['users' => $users]);

    }

    public function destroy ($id)
    {
    /***Requête pour supprimer les users***/
    //        dd($id);
        $user = User::findOrFail($id); //on interroge la base de donnée pour savoir si l'enregistrement existe

        $user->delete();

        return redirect()->back();
        
    }

    public function edit($id){

        $user = User::findOrFail($id);
//         dd($user);
//        dd($user->personnage);
        return view('users.edit', compact('user'));

    }

    //FAIRE FONCTION UPDATE
    public function update (Request $request, $id){
        //on récupère l'id saisi
        $user = User::findOrFail($id);
        //on prépare la requête pour changer les données saisies dans la bdd
        $input = $request->all();
//        dd($input);
        $user->name = $input['name'];
        $user->email = $input['email'];
//        $user->personnage['id_lodestone'] = $input['id_lodestone'];
        $personnage = $user->personnage;
        $personnage->id_lodestone = $input['personnage']['id_lodestone'];

        $user->save();
//        dd($personnage);   
        $personnage->save();

        return redirect()->route('users.index');
        
    }
}
