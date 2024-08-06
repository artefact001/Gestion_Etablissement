<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUesTable extends Migration
{
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('coef');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ues');
    }
}

