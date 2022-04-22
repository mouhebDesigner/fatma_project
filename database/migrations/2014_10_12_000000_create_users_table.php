<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('nom_societe')->nullable();
            $table->string('email')->unique();
            $table->biginteger('cin')->unique()->nullable();
            $table->biginteger('numtel')->unique();
            $table->biginteger('numtel_societe')->unique()->nullable();
            $table->date('date_naissance')->nullable();
            $table->enum('genre', ['male', 'female'])->nullable();
            $table->string('avatar')->nullable();
            $table->string('adresse')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ["client", "admin", "fournisseur"]);
            $table->boolean('approuver')->default(0)->nullable();
            $table->foreignId('categorie_id')->nullable()->constrained('categories')->onUpdate('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
