<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use Illuminate\Http\Request;

class FormationController extends Controller
{
  public function show(){

      return view("formation");
  }

    public function  create(Request  $request){
        $request->validate([
            'type_diplome'=>'required',
            'domaine_diplome'=>'required',
            'titre_diplome'=>'required',
            'ecole' => 'required',
            'niveau_etude'=>'required',
            'annee_debut'=>'required',
            'annee_fin'=>'required|',
            'image_dip'=>'required',
        ]);
        if(session()->has("Idp")){

            $diplome = new diplome();
            $diplome->type_diplome= $request->type_diplome;
            $diplome->domaine_diplome= $request->domaine_diplome;
            $diplome->titre_diplome= $request->titre_diplome ;
            $diplome->ecole= $request->ecole;
            $diplome->niveau_etude= $request->niveau_etude;
            $diplome->annee_debut= $request->annee_debut;
            $diplome->annee_fin= $request->annee_fin;
            $diplome->description= $request->description;
            if ($request->hasFile("image_dip")){
                $dist="public/imgdiplome";
                $img= $request->file("image_dip");
                $imgName= $img->getClientOriginalName();
                $path = $request->file("image_dip")->storeAs($dist,$imgName);

            }

            $diplome->image_dip= $imgName;
            $diplome->id_profil=session()->get("Idp");
            $diplome->save();

            return redirect("experioene");





    } else{
            return back()->with('fail', "compte pas  ajouter" );
        }






}}
