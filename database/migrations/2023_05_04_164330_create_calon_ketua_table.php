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
        Schema::create('calon_ketua', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('icons8-user-100.png');
            $table->string('nis')->unique();
            $table->string('nama_calon')->nullable();
            $table->string('visi');
            $table->string('misi');
            $table->integer('total_suara')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_ketua');
    }
};