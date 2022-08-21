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
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments("id");
            $table->string("titre_post");
            $table->date("date_début");
            $table->date("date_fin");
            $table->string("entreprise");
            $table->string("type_entrprise");
            $table->string("fonction");
            $table->string("secteur_activité");
            $table->string("description");
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
        Schema::dropIfExists('experiences');
    }
};
