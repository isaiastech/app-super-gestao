<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 50);
            $table->timestamps();
        });

        // relacionamento com produto (singular, como está no seu banco)
        Schema::table('produto', function (Blueprint $table) {
            $table->foreignId('unidade_id')
                  ->nullable()
                  ->constrained('unidades')
                  ->nullOnDelete();
        });

        // relacionamento com produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->foreignId('unidade_id')
                  ->nullable()
                  ->constrained('unidades')
                  ->nullOnDelete();
        });
    } // ✅ FECHAMENTO CORRETO DO UP

    public function down(): void
    {
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        Schema::table('produto', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};