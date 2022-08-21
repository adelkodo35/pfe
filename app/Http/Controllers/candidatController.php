<?php

namespace App\Http\Controllers;
use App\Models\candidat;
use App\Models\compte;
use App\Models\profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Validation\Validator;
use App\Models\diplome;
class candidatController extends Controller
{
    public function index()
    {  return view('singC'); }

public function  create(Request  $request){
      $request->validate([
           'Nom'=>'required',
            'prenom'=>'required',
          'sexe'=>'required',
          'image_profil' => 'required',
          'age'=>'required|max:2',
          'num_téléphone'=>'required',
          'email'=>'required|email',
          'adresse'=>'required',
          'lieu_naissance'=>'required',
          'date_naissance'=>'required',
          'nom_utilisateur'=>'required|unique:comptes',
          'mot_passe'=>'required|string|min:6|confirmed',

        ]);

      $compte = new compte;
      $compte->nom_utilisateur= $request->nom_utilisateur;
    $compte->nom_utilisateur= $request->nom_utilisateur;
    $compte->mot_passe= hash::make( $request->mot_passe) ;
    $compte->type= "candidat";
    $compte->etat="1";
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

}


    $profil->age=$request->age;
    $profil->image_profil=$imgName;
    $profil->num_téléphone=$request->num_téléphone;
    $profil->email=$request->email;
    $profil->adresse=$request->adresse;
    $profil->lieu_naissance=$request->lieu_naissance;
    $profil->type_profil="candidat";
    $profil->save();
    $candidat= new candidat();
    $candidat->id_compte=$compte->getKey() ;
    $candidat->id_profil= $profil->getKey();
    $result=$candidat->save();
    $request->session()->put("Idp",$candidat->id_profil);
if ($result){
    return redirect("formation");
}
else{
    return back()->with('fail', "compte pas  ajouter" );
}


}



}
