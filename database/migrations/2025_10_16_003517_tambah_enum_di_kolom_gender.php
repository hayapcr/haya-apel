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
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengubah kolom 'gender' menjadi enum baru
            $table->enum('gender', ['Pria', 'Wanita', 'Other', 'Non-Binary'])->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            // Mengembalikan kolom 'gender' ke enum aslinya
            $table->enum('gender', ['Pria', 'Wanita', 'Other', 'Non-Binary'])->nullable()->change();
        });
    }
};
