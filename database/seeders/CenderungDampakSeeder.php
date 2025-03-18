<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CenderungDampak;

class CenderungDampakSeeder extends Seeder
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
                'cenderung_id' => '1',
                'dampak_id' => '1'
            ],[
                //'id'    => 1,
                'nilai' => '2',
                'cenderung_id' => '2',
                'dampak_id' => '1'
            ],[
                //'id'    => 1,
                'nilai' => '3',
                'cenderung_id' => '3',
                'dampak_id' => '1'
            ],[
                //'id'    => 1,
                'nilai' => '4',
                'cenderung_id' => '4',
                'dampak_id' => '1'
            ],[
                //'id'    => 1,
                'nilai' => '5',
                'cenderung_id' => '5',
                'dampak_id' => '1'
            ],[
                //'id'    => 1,
                'nilai' => '2',
                'cenderung_id' => '1',
                'dampak_id' => '2'
            ],[
                //'id'    => 1,
                'nilai' => '4',
                'cenderung_id' => '2',
                'dampak_id' => '2'
            ],[
                //'id'    => 1,
                'nilai' => '6',
                'cenderung_id' => '3',
                'dampak_id' => '2'
            ],[
                //'id'    => 1,
                'nilai' => '8',
                'cenderung_id' => '4',
                'dampak_id' => '2'
            ],[
                //'id'    => 1,
                'nilai' => '10',
                'cenderung_id' => '5',
                'dampak_id' => '2'
            ],[
                //'id'    => 1,
                'nilai' => '3',
                'cenderung_id' => '1',
                'dampak_id' => '3'
            ],[
                //'id'    => 1,
                'nilai' => '6',
                'cenderung_id' => '2',
                'dampak_id' => '3'
            ],[
                //'id'    => 1,
                'nilai' => '9',
                'cenderung_id' => '3',
                'dampak_id' => '3'
            ],[
                //'id'    => 1,
                'nilai' => '12',
                'cenderung_id' => '4',
                'dampak_id' => '3'
            ],[
                //'id'    => 1,
                'nilai' => '15',
                'cenderung_id' => '5',
                'dampak_id' => '3'
            ],[
                //'id'    => 1,
                'nilai' => '4',
                'cenderung_id' => '1',
                'dampak_id' => '4'
            ],[
                //'id'    => 1,
                'nilai' => '8',
                'cenderung_id' => '2',
                'dampak_id' => '4'
            ],[
                //'id'    => 1,
                'nilai' => '12',
                'cenderung_id' => '3',
                'dampak_id' => '4'
            ],[
                //'id'    => 1,
                'nilai' => '16',
                'cenderung_id' => '4',
                'dampak_id' => '4'
            ],[
                //'id'    => 1,
                'nilai' => '20',
                'cenderung_id' => '5',
                'dampak_id' => '4'
            ],[
                //'id'    => 1,
                'nilai' => '5',
                'cenderung_id' => '1',
                'dampak_id' => '5'
            ],[
                //'id'    => 1,
                'nilai' => '10',
                'cenderung_id' => '2',
                'dampak_id' => '5'
            ],[
                //'id'    => 1,
                'nilai' => '15',
                'cenderung_id' => '3',
                'dampak_id' => '5'
            ],[
                //'id'    => 1,
                'nilai' => '20',
                'cenderung_id' => '4',
                'dampak_id' => '5'
            ],[
                //'id'    => 1,
                'nilai' => '25',
                'cenderung_id' => '5',
                'dampak_id' => '5'
            ],
        ];

        CenderungDampak::insert($dampak);
    }
}
