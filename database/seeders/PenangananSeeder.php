<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penanganan;

class PenangananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $Penanganan = [
            [
                //'id'    => 1,
                'min' => '1',
                'max' => '4',
                'risiko' => 'Sangat Rendah',
                'penanganan' => 'Risiko masih diterima, tidak perlu dilakukan pengendalian',
                'opsi' => 'Accept',
            ],[
                //'id'    => 1,
                'min' => '5',
                'max' => '9',
                'risiko' => 'Rendah',
                'penanganan' => 'Risiko masih diterima, tidak diwajibkan untuk memiliki program penurunan risiko',
                'opsi' => 'Eliminate',
            ],[
                //'id'    => 1,
                'min' => '10',
                'max' => '15',
                'risiko' => 'Sedang',
                'penanganan' => 'Risiko masih diterima, diperbolehkan untuk memiliki program penurunan risiko',
                'opsi' => 'Reduce',
            ],[
                //'id'    => 1,
                'min' => '16',
                'max' => '20',
                'risiko' => 'Tinggi',
                'penanganan' => 'Risiko Tidak Diterima,Harus ada program penurunan risiko / tindak lanjut',
                'opsi' => 'Mitigate',
            ],[
                //'id'    => 1,
                'min' => '21',
                'max' => '25',
                'risiko' => 'Sangat Tinggi',
                'penanganan' => 'Risiko Tidak Diterima,Harus ada program penurunan risiko / tindak lanjut',
                'opsi' => 'Mitigate',
            ],
        ];

        Penanganan::insert($Penanganan);
    }
}
