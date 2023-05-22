<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
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
            'judul'=> 'petualang si luffy',
            'penulis'=> 'monkey d luffy',
            'tahun'=> 2001
            ],
            [
                'id'=> '2',
                'judul'=> 'tafsir mistik',
                'penulis'=> 'sofyan',
                'tahun'=> 2002
            ],
            [
                'id'=> '3',
                'judul'=> 'tutorial nkitting dan rajut',
                'penulis'=> 'REGITA',
                'tahun'=> 2012
            ],
            [
                'id'=> '4',
                'judul'=> 'kita berbeda',
                'penulis'=> 'abimanyu',
                'tahun'=> 2020
            ]
        ];
        DB::table('artikel')->insert($data);
    }
}
