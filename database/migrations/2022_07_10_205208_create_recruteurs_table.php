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
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->increments("id");
            $table->string("entreprise")->nullable();
            $table->string("type_entreprise")->nullable();
            $table->string("pays")->nullable();
            $table->string("Ville")->nullable();
            $table->string("Rue")->nullable();
            $table->string("Région")->nullable();
            $table->string("image_logo")->nullable();
            $table->integer('id_compte')->unsigned();
            $table->foreign('id_compte')->references("id")->on("comptes");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruteurs');
    }
};
