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
        Schema::create('artigos', function (Blueprint $table) {
            $table->id()->autoIncrement()->unsigned();
            $table->bigInteger('id_categoria')->nullable(true)->default(null);
            $table->string('seo_titulo', 1000)->nullable(true)->default(null);
            $table->string('seo_descricao', 1000)->nullable(true)->default(null);
            $table->string('seo_keys', 1000)->nullable(true)->default(null);
            $table->string('texto_artigo', 3000)->nullable(true)->default(null);
            $table->dateTime('created_at')->nullable(true)->default(null);
            $table->dateTime('updated_at')->nullable(true)->default(null);
            $table->dateTime('deleted_at')->nullable(true)->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artigos');
    }
};
