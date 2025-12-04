<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('devis', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('email');
        $table->string('telephone'); // Ajout numéro de téléphone
        $table->string('service');
        $table->string('type_vetements');
        $table->integer('quantite');
        $table->string('livraison');
        $table->string('frequence');
        $table->text('message')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
