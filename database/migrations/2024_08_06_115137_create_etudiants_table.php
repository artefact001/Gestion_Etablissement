<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('matricule')->unique();
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->string('photo')->nullable();
            $table->date('date_de_naissance')->nullable(); // Date de naissance
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}