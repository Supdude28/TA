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
        Schema::create("pembayaran", function (Blueprint $table) {
            $table->integer("id_pembayaran");
            $table->integer("id_petugas");
            $table->string("nisn");
            $table->date("date");
            $table->string("bulan_dibayar");
            $table->string("tahun_dibayar");
            $table->integer("id_spp");
            $table->integer("jumlah_bayar");
            $table->timestamps();
            $table->primary("id_pembayaran");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop("pembayaran");
    }
};
