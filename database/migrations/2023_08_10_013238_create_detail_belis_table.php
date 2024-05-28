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
        Schema::create('detail_belis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nonota');
            $table->foreign('nonota')->references('id')->on('belis')->OnDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('kdmenu');
            $table->foreign('kdmenu')->references('id')->on('menus')->OnDelete('cascade')->OnUpdate('cascade');
            $table->integer('hargabeli');
            $table->tinyInteger('marginjual');
            $table->integer('jumlahbeli');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_belis');
    }
};
