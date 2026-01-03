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
        Schema::table('beritas', function (Blueprint $table) {
            // Menambah kolom gambar setelah kolom isi
            // Kita pakai nullable() supaya berita lama yang nggak ada gambarnya nggak error
            $table->string('gambar')->nullable()->after('isi'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            // Menghapus kolom gambar jika migration di-rollback
            $table->dropColumn('gambar');
        });
    }
};