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
        Schema::create('doses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidadao_id')->nullable()->constrained('cidadaos');
            $table->foreignId('vacina_id')->nullable()->constrained('vacinas');
            $table->foreignId('estabelecimento_id')->nullable()->constrained('estabelecimentos');
            $table->string('grupo_atendimento')->nullable();
            $table->string('grupo_atendimento_codigo')->nullable();
            $table->string('categoria_nome')->nullable();
            $table->string('categoria_codigo')->nullable();
            $table->string('lote')->nullable();
            $table->date('data_aplicacao')->nullable();
            $table->string('descricao_dose')->nullable();
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
        Schema::dropIfExists('doses');
    }
};
