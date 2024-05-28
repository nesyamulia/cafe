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
        Schema::create('belis', function (Blueprint $table) {
            $table->id();
            $table->date('tglbeli');
            $table->unsignedBigInteger('iddistributor');
            $table->foreign('iddistributor')->references('id')->on('distributors')->OnDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('totalBayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('belis');
    }
};
