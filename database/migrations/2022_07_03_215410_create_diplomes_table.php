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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->increments("id");
            $table->string("type_diplome");
            $table->string("domaine_diplome");
            $table->string("titre_diplome");
            $table->string("ecole");
            $table->string("niveau_etude");
            $table->date("annee_debut");
            $table->date("annee_fin");
            $table->string("description");
            $table->string("image_dip");
            $table->integer("id_profil")->unsigned();
            $table->foreign("id_profil")->references("id")->on("profils");
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
        Schema::dropIfExists('diplomes');
    }
};
