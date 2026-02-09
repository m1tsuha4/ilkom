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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('image');
            $table->string('nip')->nullable();
            $table->string('nidn')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->foreignId('pangkat_id')->constrained('pangkats')->onDelete('cascade');
            $table->foreignId('golongan_id')->constrained('golongans')->onDelete('cascade');
            $table->foreignId('jabatan_id')->constrained('jabatans')->onDelete('cascade');
            $table->foreignId('konsentrasi_id')->nullable()->constrained('konsentrasis')->onDelete('cascade');
            $table->string('alamat_instansi');
            $table->string('telpon')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('s1')->nullable();
            $table->string('s2')->nullable();
            $table->string('s3')->nullable();
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
