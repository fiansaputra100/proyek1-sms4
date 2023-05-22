<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
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
            'nama'=> 'Suhada',
            'status'=> 'Ayah'
        
            ],
            [
                'id'=> '2',
                'nama'=> 'Sulihwati',
                'status'=> 'Ibu'
                
            ],
            [
                'id'=> '3',
                'nama'=> 'Dedi aditya wijaya',
                'status'=> 'Anak'
                
            ],
            [
                'id'=> '4',
                'nama'=> 'Satria yudhistira yudha pratama',
                'status'=> 'Anak'
                
            ]
        ];
        DB::table('keluarga')->insert($data);
    }
}
