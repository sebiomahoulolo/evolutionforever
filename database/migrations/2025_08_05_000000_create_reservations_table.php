<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bien_immo_id');
            $table->string('nom');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();

            $table->foreign('bien_immo_id')->references('id')->on('bien_immos')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
