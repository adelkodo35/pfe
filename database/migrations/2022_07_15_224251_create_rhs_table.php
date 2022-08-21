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
        Schema::create('rhs', function (Blueprint $table) {

             $table->increments("id");
            $table->integer('id_profil')->unsigned();
            $table->integer('id_compte')->unsigned();
            $table->foreign('id_compte')->references("id")->on("comptes");
            $table->foreign('id_profil')->references("id")->on("profils");
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
        Schema::dropIfExists('rhs');
    }
};
