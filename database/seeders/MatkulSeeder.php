<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
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
            'nama'=> 'User Interface',
            'dosen pengampu'=> 'monkey d luffy',
            'jumlah sks'=> 15
            ],
            [
                'id'=> '2',
                'nama'=> 'Artificial Intelegence',
                'dosen pengampu'=> 'sofyan s.kom,M.kom',
                'jumlah sks'=> 10
            ],
            [
                'id'=> '3',
                'nama'=> 'bussines Intelegence',
                'dosen pengampu'=> 'REGITA s.kom,M.Pd',
                'jumlah sks'=> 12
            ],
            [
                'id'=> '4',
                'nama'=> 'Mobile aplication',
                'dosen pengampu'=> 'abimanyu S.pd,M.kom',
                'jumlah sks'=> 15
            ]
        ];
        DB::table('matkul')->insert($data);
    }
}
