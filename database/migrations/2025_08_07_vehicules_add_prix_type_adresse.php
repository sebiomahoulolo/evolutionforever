<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->integer('prix')->nullable()->after('statut');
            $table->string('type')->nullable()->after('prix');
            $table->string('adresse')->nullable()->after('type');
        });
    }

    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropColumn(['prix', 'type', 'adresse']);
        });
    }
};
