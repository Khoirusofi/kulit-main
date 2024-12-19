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
        Schema::create('diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->integer('usia');
            $table->foreignId('kulit_kepalas_id')->nullable()->constrained('kulit_kepalas')->nullOnDelete();
            $table->foreignId('proses_kimias_id')->nullable()->constrained('proses_kimias')->nullOnDelete();
            $table->foreignId('tekstur_rambuts_id')->nullable()->constrained('tekstur_rambuts')->nullOnDelete();
            $table->foreignId('ketebalan_rambuts_id')->nullable()->constrained('ketebalan_rambuts')->nullOnDelete();
            $table->foreignId('kondisi_rambuts_id')->nullable()->constrained('kondisi_rambuts')->nullOnDelete();
            $table->foreignId('kebiasaan_perawatans_id')->nullable()->constrained('kebiasaan_perawatans')->nullOnDelete();
            $table->foreignId('penggunaan_stylings_id')->nullable()->constrained('penggunaan_stylings')->nullOnDelete();
            $table->foreignId('harapan_kulit_kepalas_id')->nullable()->constrained('harapan_kulit_kepalas')->nullOnDelete();
            $table->foreignId('harapan_batang_rambuts_id')->nullable()->constrained('harapan_batang_rambuts')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnosas');
    }
};
