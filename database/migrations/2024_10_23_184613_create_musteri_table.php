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
        Schema::create('musteris', function (Blueprint $table) {
            $table->id();
            $table->integer('tip'); // 1: Bireysel, 2: Kurumsal
            $table->string('isim');
            $table->string('vergi_dairesi')->nullable();
            $table->string('tc_vergi_no')->nullable();

            $table->string('yetkili_adsoyad')->nullable();
            $table->string('yetkili_email')->nullable();
            $table->string('yetkili_telefon')->nullable();

            $table->string('firma_adresi')->nullable();
            $table->string('fatura_adresi')->nullable();
            $table->string('ulke')->nullable();
            $table->string('sehir')->nullable();
            $table->string('ilce')->nullable();
            $table->string('posta_kodu')->nullable();

            $table->string('etiketler')->nullable();
            $table->integer('para_birimi')->default(949); // 949: TL

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musteri');
    }
};
