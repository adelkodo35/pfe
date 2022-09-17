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
        Schema::create('liste_des_candidats', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("id_list")->unsigned();
            $table->integer("id_cand")->unsigned();
            $table->foreign("id_list")->references("id")->on("listes");
            $table->foreign("id_cand")->references("id")->on("candidats");
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
        Schema::dropIfExists('liste_des_candidats');
    }
};
