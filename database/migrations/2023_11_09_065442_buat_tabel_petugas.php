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
        Schema::create("petugas", function (Blueprint $table) {
            $table->integer("id_petugas");
            $table->string("username");
            $table->string("password");
            $table->string("nama_petugas");
            $table->enum("level", ["admin","petugas"]);
            $table->timestamps();
            $table->primary("id_petugas");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::drop("petugas");

    }
};
