<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('modele');
            $table->integer('annee');
            $table->string('immatriculation');
            $table->json('photos')->nullable();
            $table->string('statut')->default('Disponible');
            $table->integer('prix')->nullable();
            $table->string('type')->nullable();
            $table->string('adresse')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
};
