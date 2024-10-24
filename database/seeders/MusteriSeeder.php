<?php

namespace Database\Seeders;

use App\Models\Musteri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusteriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Musteri::factory()
            ->count(50)
            ->create();
    }
}
