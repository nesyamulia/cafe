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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu',50)->unique();
            $table->unsignedBigInteger('idjenis');
            $table->foreign('idjenis')->references('id')->on('jenis')->OnDelete('cascade')->OnUpdate('cascade');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('foto1',255);
            $table->string('foto2',255)->nullable();
            $table->string('foto3',255)->nullable();
            $table->text('deksripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
