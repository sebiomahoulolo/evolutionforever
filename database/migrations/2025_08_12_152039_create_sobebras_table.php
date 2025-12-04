<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSobebrasTable extends Migration
{
    public function up()
    {
        Schema::create('sobebras', function (Blueprint $table) {
            $table->id();
            $table->string('entreprise');
            $table->string('nom_complet');
            $table->string('email');
            $table->string('telephone'); 
            $table->string('objet');
            $table->string('type_boisson');
            $table->string('quantite');
            $table->string('adresse_livraison');
            $table->string('occasion');
            $table->dateTime('date_heure');
            $table->text('informations_complementaires')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sobebras');
    }
}
