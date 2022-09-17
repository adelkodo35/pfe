<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sousadmin;
use App\Models\compte;
use Illuminate\Support\Facades\Hash;
use App\Models\rh;
class SousadminController extends Controller
{

    public function index()
    {
$admins =  compte::where('type','=','sousadmin')->get();

return view("sousL", ["admins" => $admins]);

    }

    public function create()
    {
     return view("addS");
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
     $compte->type= "sousadmin";
     $compte->etat="1";
     $compte->save();

$s = new Sousadmin();
     $s->id_compte=$compte->getKey() ;
     $s->save();
 if ($s){
     return redirect("sousadmin");
 }
    }

    public function show($id)
    {
$admin = compte::findOrFail($id);
        return view("sadminShow",['admin' => $admin]);


    }

    public function edit($id)
    {
        return view("updateadmins",['admin'=> compte::where('id','=',$id)->get()]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_utilisateur'=>'required|unique:comptes',
            'mot_passe'=>'required|string|min:6|confirmed',

          ]);
$c = compte::find($id);
$c->nom_utilisateur= $request->nom_utilisateur;
$c->mot_passe= hash::make( $request->mot_passe);
$c->save();

return redirect("sousadmin");


}

    public function destroy($id)
    {

        $s= sousadmin::where('id_compte','=',$id)->delete();
        $admin = compte::where('id','=',$id)->delete();
        return redirect("sousadmin");
    }
    public function destroyrh($id)
    {

        $s= rh::where('id_compte','=',$id)->delete();
        $admin = compte::where('id','=',$id)->delete();
        return back();
    }

    public function block($id){

        $c = compte::find($id);
        $c->etat=0;
     $c->save();
     return back();
    }
    public function deblock($id){

        $c = compte::find($id);
        $c->etat=1;
     $c->save();
     return back();
    }



public function login(){
  $c = compte::findOrFail(session("LogedUser")) ;
  if ($c->etat==0) {
    return view("406");
  }else{return view("sousadmin.home",['admin' => $c]);
}
}


public function inscriptionRH(){
    $rhs = compte::where('type','=','rh')->get() ;
return view("rh.listRHI",['rhs'=> $rhs]);

}

}
