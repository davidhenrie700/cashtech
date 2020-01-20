<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 140);
            $table->string('tipo_prof', 10);
            $table->string('pis', 11)->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('cpf_cnpj', 20)->unique();
            $table->string('cep', 9);
            $table->string('endereco', 140);
            $table->string('num_end', 8);
            $table->string('complemento', 20)->nullable();
            $table->string('cidade', 18);
            $table->string('bairro', 20);
            $table->string('estado', 2);
            $table->string('telefone')->unique();
            $table->string('email', 140)->unique();
            $table->string('cnae', 10)->nullable();
            $table->string('tipo_servico', 100);
            $table->string('area', 140);
            $table->decimal('valor_bruto', 9, 0);
            $table->decimal('valor_liquido', 9, 0);
            $table->date('vencimento');
            $table->string('tipo_conta', 20);
            $table->string('banco_prof', 40);
            $table->string('agencia', 10);
            $table->smallInteger('digito_agencia');
            $table->string('conta', 20)->unique();
            $table->smallInteger('digito_conta');
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
        Schema::dropIfExists('providers');
    }
}
