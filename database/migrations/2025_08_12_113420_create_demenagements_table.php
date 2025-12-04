<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('demenagements', function (Blueprint $table) {
    $table->id();
    $table->string('nom');
    $table->string('email');
    $table->string('telephone');
    $table->string('type_demenagement');
    $table->string('volume');
    $table->text('adresse');
    $table->string('emballage');
    $table->date('date_souhaitee');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demenagements');
    }
};
