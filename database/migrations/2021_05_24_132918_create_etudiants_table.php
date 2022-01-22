<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->unique();
            $table->string('adresse');
            $table->string('mail')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel')->unique();
            $table->bigInteger('diplome_id')->unsigned()->index();
            $table->foreign('diplome_id')->references('id')->on('diplomes');
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
        Schema::dropIfExists('etudiants');
    }
}
