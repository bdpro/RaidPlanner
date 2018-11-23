<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utilisateurs;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
        public function submit(Request $request){
        //validation message
        $this->validate($request,['pseudo'=>'required','mail'=>'required|email','mdp'=>'required' ]);
        
        //recup message et stockage dans bdd
        $inscription = new utilisateurs;
        $inscription->pseudo = $request->input('pseudo');
        $inscription->mail = $request->input('mail');
        $inscription->mdp = bcrypt(request('mdp'));
           
        $inscription->role = '0';
        $inscription->save();
        
        return redirect('raidplanner')->with('success','Votre inscription a bien été prise en compte');
    }
    

}
