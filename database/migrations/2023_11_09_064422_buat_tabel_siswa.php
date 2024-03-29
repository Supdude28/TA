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
        Schema::create("siswa", function (Blueprint $table) {
            $table->char("nisn");
            $table->char("nis");
            $table->string("nama");
            $table->integer("id_kelas");
            $table->text("alamat");
            $table->string("no_telp");
            $table->integer("id_spp");
            $table->timestamps();
            $table->primary("nisn");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop("siswa");
    }
};
