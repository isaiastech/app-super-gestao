<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('nome');
            $table->string('site')->nullable();
            $table->string('uf', 2);
            $table->string('email')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn(['nome', 'site', 'uf', 'email']);
        });
    }
};

