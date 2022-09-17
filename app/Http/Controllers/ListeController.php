<?php

namespace App\Http\Controllers;

use App\Models\candidat;
use App\Models\Liste;
use Illuminate\Http\Request;
use App\Models\Liste_des_candidats;
use App\Models\diplome;
use App\Models\profil;
use PhpParser\Node\Expr\List_;
class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $l = Liste::all();


        return view("rh.favority",['lists'=>$l]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view("rh.clist");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreListeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request  $request)
    {
        $request->validate([
            'titre_liste'=>'required'

         ]);

$l = new Liste ;
$l->titre_liste= $request->titre_liste;
$l->save();
return back();

    }
    public function star( Request  $request)
    {
        $c = candidat ::where('id_profil','=',$request->id_profil)->first();
        $l = new Liste_des_candidats();
        $l->id_list= $request->id_list;
        $l->id_cand=$c->id;
        $l->save();
 return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liste  $liste
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

    $s = Liste_des_candidats :: where('id_list','=',$id)->pluck("id_cand") ;

    $c = candidat :: all() ;

    $p = profil :: all() ;



     return view('LCs',['fav' => $s,'profil' => $p,'candidats' => $c] );


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liste  $liste
     * @return \Illuminate\Http\Response
     */
    public function edit(Liste $liste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListeRequest  $request
     * @param  \App\Models\Liste  $liste
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Liste $liste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liste  $liste
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        $ls= Liste_des_candidats::where("id_list","=",$id)->get();
        foreach ($ls as $l ) {
            $l->delete();
        }
        $s= Liste::findOrFail($id)->delete();
        return back();
    }
}
