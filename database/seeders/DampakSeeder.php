<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dampak;

class DampakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $dampak = [
            [
                //'id'    => 1,
                'nilai' => '1',
                'finansial' => 'Tidak ada kerugian finansial',
                'compliance' => 'Teguran Informal/verbal',
                'reputasi' => 'Tidak ada dampak pada reputasi perusahaan',
                'dampak' => 'Tidak ada'
            ],[
                //'id'    => 1,
                'nilai' => '2',
                'finansial' => 'Potensi kerugian perusahaan 0 s.d 1 Juta',
                'compliance' => 'Teguran berdampak pertemuan dengan stakeholder',
                'reputasi' => 'Menerima laporan dari client namun dapat diisolir pada level pelaksana',
                'dampak' => 'Ringan'
            ],[
                //'id'    => 1,
                'nilai' => '3',
                'finansial' => 'Potensi kerugian perusahaan di atas 1 Juta s.d 5 Juta',
                'compliance' => 'Peringatan tertulis formal',
                'reputasi' => 'Menerima laporan dari client dan melibatkan Manager untuk penyelesaian',
                'dampak' => 'Sedang'
            ],[
                //'id'    => 1,
                'nilai' => '4',
                'finansial' => 'Potensi kerugian perusahaan di atas 5 Juta s.d 10 Juta ',
                'compliance' => 'Pembatasan/penghentian sementara proses operasional',
                'reputasi' => 'Menerima laporan dari client dan melibatkan Direktur untuk penyelesaian',
                'dampak' => 'Tinggi'
            ],[
                //'id'    => 1,
                'nilai' => '5',
                'finansial' => 'Potensi kerugian perusahaan di atas 10 Juta',
                'compliance' => 'Penerimaan sanksi/denda',
                'reputasi' => 'Menerima laporan dari client yang menyebabkan hilangnya kepercayaan client',
                'dampak' => 'Critical'
            ],
        ];

        Dampak::insert($dampak);
    }
}
