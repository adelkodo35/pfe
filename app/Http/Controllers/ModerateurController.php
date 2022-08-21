<?php

namespace App\Http\Controllers;

use App\Models\moderateur;
use Illuminate\Http\Request;
use App\Models\compte;
use Illuminate\Support\Facades\Hash;
class ModerateurController extends Controller
{

    public function index()
    {
        $moderateurs =  compte::where('type','=','moderateur')->get();

        return view("ml", ["moderateurs" => $moderateurs]);
    }


    public function create()
    {
        return view("addM");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom_utilisateur'=>'required|unique:comptes',
            'mot_passe'=>'required|string|min:6|confirmed',

          ]);

        $compte = new compte;
        $compte->nom_utilisateur= $request->nom_utilisateur;
      $compte->mot_passe= hash::make( $request->mot_passe) ;
      $compte->type= "moderateur";
      $compte->etat="1";
      $compte->save();

 $s = new moderateur();
      $s->id_compte=$compte->getKey() ;
      $s->save();
  if ($s){
      return redirect("moderateur");
  }
    }


    public function show( $moderateur)
    {
        {
            $m = compte::findOrFail($moderateur);
                    return view("mShow",['moderateur' => $m]);
    }
    }

    public function edit( $moderateur)
    {
        return view("updatem",['moderateur'=> compte::findOrFail($moderateur)  ]);
    }


    public function update(Request $request,  $moderateur)
    {
        $request->validate([
            'nom_utilisateur'=>'required|unique:comptes',
            'mot_passe'=>'required|string|min:6|confirmed',

          ]);
$c = compte::find($moderateur);
$c->nom_utilisateur= $request->nom_utilisateur;
$c->mot_passe= hash::make( $request->mot_passe);

$c->save();

return redirect("moderateur");
    }


    public function destroy( $moderateur)
    {

        $s= moderateur::where('id_compte','=',$moderateur)->delete();
        $admin = compte::where('id','=',$moderateur)->delete();
        return redirect("moderateur");
    }

    public function block($id){

        $c = compte::find($id);
        $c->etat=0;
     $c->save();
     return redirect("moderateur");
    }
    public function deblock($id){

        $c = compte::find($id);
        $c->etat=1;
     $c->save();
     return redirect("moderateur");
    }
}
