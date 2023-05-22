<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
            'id'=> '1',
            'nama'=> 'Game Online',
            'durasi'=> '10 tahun'
            ],
            [
                'id'=> '2',
                'nama'=> 'Bulu tangkis',
                'durasi'=> '8 tahun' 
            ],
            [
                'id'=> '3',
                'nama'=> 'Bersepeda',
                'durasi'=> '5 tahun'
            ],
            [
                'id'=> '4',
                'nama'=> 'GYM',   
                'durasi'=> '2 tahun'
            ]
        ];
        DB::table('hobi')->insert($data);
    }
}
