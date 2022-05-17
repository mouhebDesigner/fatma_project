<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->enum('etat', ['en attente', 'en cours', 'terminé', 'non traité']);
            $table->foreignId('vehicule_id')->nullable()->constrained('vehicules')->onUpdate('cascade');
            $table->foreignId('demande_id')->nullable()->constrained('demandes')->onUpdate('cascade');
            $table->foreignId('livreur_id')->nullable()->constrained('users')->onUpdate('cascade');
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
        Schema::dropIfExists('missions');
    }
}
