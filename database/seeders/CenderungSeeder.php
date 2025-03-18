<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cenderung;

class CenderungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cenderung = [
            [
                //'id'    => 1,
                'nilai' => '1',
                'pola' => '0 Kejadian',
                'kemungkinan' => '<20% (Mitigasi sudah tersedia dan efektif untuk mengendalikan risiko)',
            ],
            [
                //'id'    => 1,
                'nilai' => '2',
                'pola' => '1 Kejadian',
                'kemungkinan' => '<40% (Mitigasi sudah tersedia namun mitigasi masih bisa ditingkatkan)',
            ],
            [
                //'id'    => 1,
                'nilai' => '3',
                'pola' => '2 - 3 Kejadian',
                'kemungkinan' => '<60% (Mitigasi hanya sebagian kecil tersedia)',
            ],
            [
                //'id'    => 1,
                'nilai' => '4',
                'pola' => '4 - 5 Kejadian',
                'kemungkinan' => '<80% (Mitigasi sudah ditetapkan namun bukti pelaksanaan belum dilakukan)',
            ],
            [
                //'id'    => 1,
                'nilai' => '5',
                'pola' => '>5 Kejadian',
                'kemungkinan' => '>80% (Belum tersedia mitigasi risiko)',
            ],
        ];

        Cenderung::insert($cenderung);
    }
}
