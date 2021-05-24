<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nombre',20);
            $table->string('a_paterno', 100);
            $table->string('a_materno', 100);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('imagen')->default('');
            $table->enum('rol', ['supervisor', 'encargado', 'contador', 'cliente']);
            $table->string('password');
            $table->boolean('activa')->default(1);
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
        Schema::dropIfExists('usuarios');
    }
}
