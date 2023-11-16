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
        Schema::create('immeuble_equipement', function (Blueprint $table) {
            $table->unsignedBigInteger('immeuble_id');
            $table->foreign('immeuble_id')->references('id')->on('immeubles');
            $table->unsignedBigInteger('equipement_id');
            $table->foreign('equipement_id')->references('id')->on('equipements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immeuble_equipement');
    }
};
