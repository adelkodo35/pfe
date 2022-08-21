<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\competence;
class CompetenceController extends Controller
{
public function show(){
   return view("competence");


}

    public function  create(Request  $request){
        $request->validate([
            'compétence'=>'required',

        ]);
        if(session()->has("Idp")){

            $competence = new competence();
            $competence->compétence= $request->compétence;
            $competence->niveau_compétence= $request->niveau_compétence ;
            $competence->id_profil=session()->get("Idp");
            $competence->save();

            return redirect("login");





        } else{
            return back()->with('fail', "compte pas  ajouter" );
        }






    }













}
