<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
        
       public function home(){
            if (auth()->check()) 
                return view('accueil.index');
            else 
                return view('home');

        }
        public function accueil(){
        return view('accueil');
        }
        public function inscription(){
        return view('inscription');
        }
        public function gearpannel(){
        return view('gearpannel');
        }
        public function webagencyfail(){
        return view('webagencyfail');
        }
        public function raidplanner(){
        return view('raidplanner');
        }
}
