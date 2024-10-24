<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Musteri;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musteri>
 */
class MusteriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Musteri::class;

    public function definition(): array
    {
        $this->faker = \Faker\Factory::create('tr_TR');
        $tip = $this->faker->randomElement([1, 2]);
        return [
            'tip' => $tip,
            'isim' => $tip === 1 ? $this->faker->name() : $this->faker->company(),
            'vergi_dairesi' => $tip === 2 ? $this->faker->company() : null,
            'tc_vergi_no' => $tip === 2 ? $this->faker->numerify('##########') : null,
            'yetkili_adsoyad' => $this->faker->name(),
            'yetkili_email' => $this->faker->unique()->safeEmail(),
            'yetkili_telefon' => $this->faker->unique()->phoneNumber(),
            'firma_adresi' => $this->faker->streetAddress(),
            'fatura_adresi' => $this->faker->streetAddress(),
            'ulke' => $this->faker->country(),
            'sehir' => $this->faker->city(),
            'ilce' => $this->faker->randomElement([
                'Adalar', 'Arnavutköy', 'Ataşehir', 'Avcılar', 'Bağcılar', 'Bahçelievler', 'Bakırköy', 'Başakşehir', 'Bayrampaşa', 'Beşiktaş', 'Beykoz', 'Beylikdüzü', 'Beyoğlu', 'Büyükçekmece', 'Çatalca', 'Çekmeköy', 'Esenler', 'Esenyurt', 'Eyüpsultan', 'Fatih', 'Gaziosmanpaşa', 'Güngören', 'Kadıköy', 'Kağıthane', 'Kartal', 'Küçükçekmece', 'Maltepe', 'Pendik', 'Sancaktepe', 'Sarıyer', 'Silivri', 'Sultanbeyli', 'Sultangazi', 'Şile', 'Şişli', 'Tuzla', 'Ümraniye', 'Üsküdar', 'Zeytinburnu'
            ]),
            'posta_kodu' => $this->faker->postCode(),
            'etiketler' => implode(', ', $this->faker->randomElements([
                'güvenilir', 'profesyonel', 'yenilikçi', 'lider', 'kaliteli', 'müşteri odaklı', 'çözüm odaklı', 'tecrübeli', 'başarılı', 'uzman'
            ], 3)),
            'para_birimi' => 949
        ];
    }
}
