<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('data_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("NIM");
            $table->string("dosen_pembimbing_1");
            $table->string("dosen_pembimbing_2");
            $table->string("dosen_penguji");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_bimbingan');
    }
};
