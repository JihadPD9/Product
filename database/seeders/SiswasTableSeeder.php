<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap'      => 'Muhammad Jihad Putra Drajat',
                'jenis_kelamin'     => 'Pria',
                'tanggal_lahir'     => '2009-04-07',
                'kelas'             => 'X RPL 1',
            ],
            [
                'nama_lengkap'      => 'Ilman Abidullah',
                'jenis_kelamin'     => 'Pria',
                'tanggal_lahir'     => '2009-05-08',
                'kelas'             => 'X RPL 1',
            ],
            [
                'nama_lengkap'      => 'Davin Gahisan Mustafid',
                'jenis_kelamin'     => 'Pria',
                'tanggal_lahir'     => '2009-06-09',
                'kelas'             => 'X RPL 1',
            ],
            [
                'nama_lengkap'      => 'Fakhri Ibnu Nabil',
                'jenis_kelamin'     => 'Pria',
                'tanggal_lahir'     => '2009-07-10',
                'kelas'             => 'X RPL 1',
            ],
            [
                'nama_lengkap'      => 'Rehan Ramadhan',
                'jenis_kelamin'     => 'Pria',
                'tanggal_lahir'     => '2009-08-11',
                'kelas'             => 'X RPL 1',
            ],
        ]);
    }
}
