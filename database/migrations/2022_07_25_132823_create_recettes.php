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
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 50);
            $table->string('slug', 50)->unique()->nullable();
            $table->smallInteger('nb_convices')->nullable();
            $table->string('description', 400);
            $table->unsignedBigInteger('plat_id');
            $table->foreign('plat_id')->references('id')->on('plats');
            $table->unsignedBigInteger('saison_id')->nullable();
            $table->foreign('saison_id')->references('id')->on('saisons');
            $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recettes');
    }
};
