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
        Schema::create('line_commandes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_commande');
            $table->integer('id_produit');
            $table->integer('quantité');
            $table->float('prix_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_commandes');
    }
};
