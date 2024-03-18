<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadaos', function (Blueprint $table) {
            $table->id();
            $table->date('data_nascimento')->nullable();
            $table->string('codigo_raca_cor')->nullable();
            $table->string('codigo_nacionalidade')->nullable();
            $table->string('sexo_biologico')->nullable();
            $table->foreignId('endereco_id')->nullable()->constrained('enderecos');
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
        Schema::dropIfExists('cidadaos');
    }
};
