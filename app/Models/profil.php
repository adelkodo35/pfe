<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    public function candidat(){
        $this->belongsTo("App/Models/candidat");
    }

    public function diplome(){
        $this->hasMany("App/Models/diplome");
    }
    use HasFactory;
}
