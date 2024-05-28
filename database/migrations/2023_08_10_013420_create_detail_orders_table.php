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
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noorder');
            $table->foreign('noorder')->references('id')->on('orders')->OnDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('kdmenu');
            $table->foreign('kdmenu')->references('id')->on('menus')->OnDelete('cascade')->OnUpdate('cascade');
            $table->integer('hargajual');
            $table->integer('jumlah');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_orders');
    }
};
