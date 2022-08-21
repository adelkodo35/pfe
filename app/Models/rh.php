<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rh extends Model
{
    public  function  profil()
    {
        $this->hasOne("App\Models\profil");

    }

    use HasFactory;
}
