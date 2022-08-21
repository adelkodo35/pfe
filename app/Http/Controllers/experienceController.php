<?php

namespace App\Http\Controllers;

use App\Models\experience;

use Illuminate\Http\Request;

class experienceController extends Controller
{
    public function show(){

        return view("experience");
    }
    public function  create(Request  $request){
        $request->validate([
            'entreprise'=>'required',
            'fonction'=>'required',
            'titre_post'=>'required',

        ]);
        if(session()->has("Idp")){

            $exprience  = new experience();
            $exprience ->titre_post= $request->titre_post;
            $exprience ->date_début= $request->date_début;
            $exprience ->date_fin= $request->date_fin ;
            $exprience ->entreprise= $request->entreprise;
            $exprience ->type_entrprise= $request->type_entrprise;
            $exprience ->fonction= $request->fonction;
            $exprience ->secteur_activité= $request->secteur_activité;
            $exprience->description= $request->description;
            $exprience->id_profil=session()->get("Idp");
            $exprience->save();

            return redirect("competence");





        } else{
            return back()->with('fail', "compte pas  ajouter" );
        }






    }


}
