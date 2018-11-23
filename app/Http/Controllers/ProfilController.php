<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\profil;
use App\user;
use App\Personnage;
use DB;

class ProfilController extends Controller
{
     public function index()
    {
      
         $profil = DB::table('users')
           ->join('personnages','personnages.id_user','=','users.id')
            ->select('users.*','personnages.id_lodestone', 'personnages.job')
            ->where ('users.id','=', Auth::user()->id)
             ->get();
//         dd($profil);
         return view('profil.index')->with('profil', $profil);
    }
    
    
     public function edit($id){
return "dvdf";
        $profil = profil::findOrFail($id);
         dd($profil);
//        dd($user->personnage);
        return view('profil', compact('profil'));

    }

    
    
        public function update (Request $request, $id){
            
            $profil = profil::findOrFail($id);
            
            $input = $request->all();
            
            
            $profil->name = $input['name'];
            $profil->email = $input['email'];
           
            if ($input['password'] != null)    
                $profil->password = Hash::make($input['password']);
//            dd($input);
            $personnage = $profil->personnage;
//            dd($personnage);
//            dd($personnage->id_lodestone);
            $personnage->id_lodestone = $input['id_lodestone'];
            $personnage->job = $input['job'];
            
            $profil->save();
           
            $personnage->save();
          
            return redirect()->route('profil.index');
            
            
        }
    

        public function show ($id){
            return "show";
        }
        public function create (){
            return "create";
            
        }
        public function store (Request $request){
            
            return "store";
        }

}
