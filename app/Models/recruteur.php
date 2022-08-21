<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruteur extends Model
{
    public  function  coompte(){
        $this->hasOne("App\Models\compte");


    }

 public $timestamps =false;
    use HasFactory;
}
