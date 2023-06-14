<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Pengaturanpendaftaran;

class PengaturanpendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Pengaturanpendaftaran::create([
        //     'status_pendaftaran' => 'tutup',
        //     'batas_tutup' => Carbon::now()->format('Y-m-d')
        // ]);

        Pengaturanpendaftaran::create([
            'status_pendaftaran' => $faker->randomElement(['tutup, ']),
            'batas_tutup' => $faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d')
        ]);
    }
}
