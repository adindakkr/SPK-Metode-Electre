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
        Schema::create('electre_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alternative');
            $table->unsignedBigInteger('id_criteria');
            $table->foreign('id_alternative')->references('id')->on('electre_alternatives');
            $table->foreign('id_criteria')->references('id')->on('electre_criterias');
            $table->float('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electre_evaluations');
    }
};
