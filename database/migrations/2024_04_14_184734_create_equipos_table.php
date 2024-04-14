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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->integer('arq')->nullable();
            $table->integer('def1')->nullable();
            $table->integer('def2')->nullable();
            $table->integer('def3')->nullable();
            $table->integer('def4')->nullable();
            $table->integer('mc1')->nullable();
            $table->integer('mc2')->nullable();
            $table->integer('mc3')->nullable();
            $table->integer('del1')->nullable();
            $table->integer('del2')->nullable();
            $table->integer('del3')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
