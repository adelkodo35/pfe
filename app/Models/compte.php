<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class compte extends Model
{
     use HasApiTokens, HasFactory, Notifiable;

public function candidat(){
    $this->belongsTo("App/Models/candidat");
}

    public function recruteur(){
        $this->belongsTo("App/Models/recruteur");
    }





    protected $fillable = [
      'id_compte',
'nom_utilisateur',
'mot_passe',
'type',
"etat"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'mot_passe',
        'type'
    ];




}
