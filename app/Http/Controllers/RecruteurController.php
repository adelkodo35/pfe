<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\compte;
use App\Models\recruteur;
use Illuminate\Support\Facades\Hash;
class RecruteurController extends Controller
{
 public function  show(){

     return view('singR');

}
public function  create(Request  $request)
{
    $request->validate([
        'entreprise' => 'required',
        'type_entreprise' => 'required',
        'nom_utilisateur' => 'required|unique:comptes',
        'mot_passe' => 'required|string|min:5|confirmed',

    ]);

    $compte = new compte;
    $compte->nom_utilisateur = $request->nom_utilisateur;
    $compte->nom_utilisateur = $request->nom_utilisateur;
    $compte->mot_passe = hash::make($request->mot_passe);
    $compte->type = "recruteur";
    $compte->etat = "1";
    $compte->save();
    $recruteur = new recruteur();
    $recruteur->entreprise= $request->entreprise;
    $recruteur->type_entreprise= $request->type_entreprise;
    $recruteur->pays= $request->pays;
    $recruteur->Ville= $request->Ville;
    $recruteur->Rue= $request->Rue;
    $recruteur->Région= $request->Région;
    if ($request->hasFile("image_logo")){
        $dist="public/logo";
        $img= $request->file("image_logo");
        $imgName= $img->getClientOriginalName();
        $path = $request->file("image_logo")->storeAs($dist,$imgName);
    }

    $recruteur->id_compte=$compte->getKey();
    $recruteur->save();
    if ($recruteur){
        return redirect("login");
    }



}

}
