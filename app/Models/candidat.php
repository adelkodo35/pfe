<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidat extends Model
{
    public  function  profil(){
        $this->hasOne("App\Models\profil");

    }
    public  function  candidat(){
        $this->hasOne("App\Models\candidat");

    }


    use HasFactory;
}
