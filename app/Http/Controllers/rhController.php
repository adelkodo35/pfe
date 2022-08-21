<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\profil;
use App\Models\rh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class rhController extends Controller
{
    public function  show(){

        return view('singRh');

    }

    public function  create(Request  $request)
    {
        $request->validate([


            'Nom'=>'required',
            'prenom'=>'required',
            'num_téléphone'=>'required',
            'email'=>'required|email',
            'nom_utilisateur' => 'required|unique:comptes',
            'mot_passe' => 'required|string|min:5|confirmed',

        ]);

        $compte = new compte;
        $compte->nom_utilisateur = $request->nom_utilisateur;
        $compte->mot_passe = hash::make($request->mot_passe);
        $compte->type = "rh";
        $compte->etat = "1";
        $compte->save();
        $profil=new profil();
        $profil->nom=$request->Nom;
        $profil->prenom=$request->prenom;
        $profil->num_téléphone=$request->num_téléphone;
        $profil->email=$request->email;
        $profil->type_profil="rh";
        $profil->save();
        $rh= new rh();
        $rh->id_compte=$compte->getKey();
        $rh->id_profil= $profil->getKey();
$rh->save();

        if ($rh){
            return redirect("login");
        }



    }


}
