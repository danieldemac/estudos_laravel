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
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
        //adicionar o relacionamento com a tabela produtos
        
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //adicionar o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remover o relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            //remover a fk
           
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); //[table]_[coluna]_foreing
            
           //remover a coluna unidade_id
            
            $table->dropColumn('unidade_id');
            
        });
        
        //remover o relacionamento com a tabela produtos
        
        Schema::table('produtos', function(Blueprint $table){
            //remover a fk
           
            $table->dropForeign('produtos_unidade_id_foreign'); //[table]_[coluna]_foreing
            
           //remover a coluna unidade_id
            
            $table->dropColumn('unidade_id');
            
        });

        Schema::dropIfExists('unidades');
    }
};
