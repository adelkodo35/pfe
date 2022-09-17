<?php

namespace App\Http\Controllers;

use App\Models\compte;
use App\Models\profil;
use App\Models\diplome;
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
        $compte->etat = "0";
        $compte->save();
        $profil=new profil();
        $profil->nom=$request->Nom;
    $profil->prenom=$request->prenom;
    $profil->date_naissance=$request->date_naissance;
    $profil->sexe=$request->sexe;
if ($request->hasFile("image_profil")){
    $dist="public/imgProfil";
    $img= $request->file("image_profil");
    $imgName= $img->getClientOriginalName();
    $path = $request->file("image_profil")->storeAs($dist,$imgName);
 $profil->image_profil=$imgName;
}


    $profil->age=$request->age;
    $profil->num_téléphone=$request->num_téléphone;
    $profil->email=$request->email;
    $profil->adresse=$request->adresse;
    $profil->lieu_naissance=$request->lieu_naissance;
        $profil->type_profil="rh";
        $profil->save();
        $rh= new rh();
        $rh->id_compte=$compte->getKey();
        $rh->id_profil= $profil->getKey();

            if ($request->hasFile("image_dip")){
                $diplome = new diplome();
                $diplome->type_diplome= $request->type_diplome;
                $diplome->domaine_diplome= $request->domaine_diplome;
                $diplome->titre_diplome= $request->titre_diplome ;
                $diplome->ecole= $request->ecole;
                $diplome->niveau_etude= $request->niveau_etude;
                $diplome->annee_debut= $request->annee_debut;
                $diplome->annee_fin= $request->annee_fin;
                $diplome->description= $request->description;
                $dist="public/imgdiplome";
                $img= $request->file("image_dip");
                $imgName= $img->getClientOriginalName();
                $path = $request->file("image_dip")->storeAs($dist,$imgName);
                $diplome->image_dip= $imgName;

            $diplome->id_profil=$profil->getKey();
            $diplome->save();
            }



$rh->save();

        if ($rh){
            return redirect("login");
        }



    }


public function home(){
    $rh = compte::findOrFail(session("LogedUser")) ;

  if ( $rh->etat == "0") {
    return view("rh.fail");
  }
if ( $rh->etat = "1") {
return view("rh.home",["rh"=> $rh]);
}



}

public function view($id){
$rh = rh::where('id_compte','=',$id)->first();
$profile = profil::findOrFail($rh->id_profil);
$c = compte::findOrFail(session("LogedUser")) ;
return view("rh.profile",['rh' =>$rh , 'profile' => $profile, 'admin' => $c]);
}



}
