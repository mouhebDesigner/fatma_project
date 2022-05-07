<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->string('article')->nullable();
            $table->string('destination')->nullable();
            $table->date('date')->nullable();
            $table->string('nom_client')->nullable();
            $table->string('document')->nullable();
            $table->biginteger('num_client')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onDelete('cascade');
            $table->foreignId('livreur_id')->nullable()->constrained('users')->onDelete('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('demandes');
    }
}
