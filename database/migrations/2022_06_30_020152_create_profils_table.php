<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->date("date_naissance")->nullable();
            $table->string('sexe')->nullable();
            $table->string('age')->nullable();
            $table->string('num_téléphone')->nullable();
            $table->string("email")->nullable();
            $table->string('adresse')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string("type_profil");
            $table->string("image_profil")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
};
