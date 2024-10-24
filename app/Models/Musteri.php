<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
    use HasFactory;

    protected $fillable = [
        'tip',
        'isim',
        'vergi_dairesi',
        'tc_vergi_no',
        'yetkili_adsoyad',
        'yetkili_email',
        'yetkili_telefon',
        'firma_adresi',
        'fatura_adresi',
        'ulke',
        'sehir',
        'ilce',
        'posta_kodu',
        'etiketler',
        'para_birimi'
    ];
}
