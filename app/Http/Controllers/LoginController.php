<?php

namespace App\Http\Controllers;
use App\Models\candidat;
use App\Models\recruteur;
use App\Models\compte;
use App\Models\diplome;
use App\Models\experience;
use App\Models\competence;
use App\Models\profil;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function show(){
        return view("login");
    }



    public function verify(Request $request){
        $request->validate([
           "nom_utilisateur"=>"required",
               "mot_passe"=>"required"
        ]);
// verify valide

    $compte= compte::where("nom_utilisateur","=",$request->nom_utilisateur)->first();
if ($compte){
if (Hash::check("$request->mot_passe","$compte->mot_passe")){



    $request->session()->put("LogedUser",$compte->id);

    if ($compte->type=="candidat"){
        return  redirect("profile");
    }

    if ($compte->type=="recruteur"){
        return  redirect("Recruteur");
    }

    if ($compte->type=="rh"){
        return  redirect("RH.home");
    }



    if ($compte->type=="admin"){
        return  redirect("admin");
    }

    if ($compte->type=="sousadmin"){
        return  redirect("sousadmin.login");

    }


}else{
    return back()->with("fail2","mot de passe incorrect");}

}else{
return back()->with("fail1"," compte  invalide, ");
}
    }





  public function profileC(){
        if (session()->has("LogedUser")){
            $candidat= candidat::where("id_compte","=",session("LogedUser"))->first();
            $profil= profil::where("id","=",$candidat->id_profil)->first();
            $diplome= diplome::where("id_profil","=",$profil->id_profil)->first();
            $competence = competence::where("id_profil","=",$profil->id_profil)->first();
            $experience = experience::where("id_profil","=",$profil->id_profil)->first();
$data=[
    "info"=>$profil ,
    "diplome"=>$diplome,
    "competence"=>$competence,
    "experience"=>$experience

    ];

        }else{ return redirect("login") ;}
      return view("condidat",$data);
  }
public function logout(){
    if (session()->has("LogedUser")){
        session()->pull("LogedUser");
return redirect("login");
    }

}

public function Recruteur(){

    if (session()->has("LogedUser")){
        $recruteur= recruteur::where("id_compte","=",session("LogedUser"))->first();

        $data=[
            "recruteur"=>$recruteur ,
        ];

    }else{ return redirect("login") ; }
    return view("recrut.Recrut",$data);
}









}




