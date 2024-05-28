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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('tglorder');
            $table->bigInteger('totalbayar');
            $table->unsignedBigInteger('idpelanggan')->default(1);
            $table->foreign('idpelanggan')->references('id')->on('pelanggans')->OnDelete('cascade')->OnUpdate('cascade');
            $table->unsignedBigInteger('iduser')->defaul(1);
            $table->foreign('iduser')->references('id')->on('users')->OnDelete('cascade')->OnUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
