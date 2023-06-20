<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Datajeniskelamin;

class DatajeniskelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'jenis_kelamin' => 'Laki-laki',
                'jumlah' => '4376',
            ],
            [
                'jenis_kelamin' => 'Perempuan',
                'jumlah' => '5478',
            ],
        ];

        foreach ($data as $item) {
            Datajeniskelamin::create($item);
        }
    }
}
