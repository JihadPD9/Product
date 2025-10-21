<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->delete();
        DB::table('biodatas')->insert([
            [
                'nama_lengkap'     => 'Muhammad Jihad Putra Drajat',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-07',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Taman Kopo Indah',
                'telepon'=> '081282469055',
                'email'=> 'jihad@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Ilman Abidullah',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-08',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469066',
                'email'=> 'ilman@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Davin Gahisan Mustafid',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-09',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469077',
                'email'=> 'davin@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Fakhri Ibnu Nabil',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-10',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469088',
                'email'=> 'fakhri@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Rehan Ramadhan',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-11',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Taman Kopo Indah',
                'telepon'=> '081282469099',
                'email'=> 'rehan@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Reyhan Azka',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-12',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Jati Mekar',
                'telepon'=> '081282469000',
                'email'=> 'reyhan@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Marsha Bara Suwarna',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-13',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Banjaran',
                'telepon'=> '081282469011',
                'email'=> 'bara@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Teguh Firmansyah',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-14',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469022',
                'email'=> 'teguh@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Dikri Nurohman',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-15',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469033',
                'email'=> 'dikri@gmail.com',
            ],
            [
                'nama_lengkap'     => 'Aliva Nugraha Sajahtar',
                'jenis_kelamin'   => 'Laki-laki',
                'tanggal_lahir'=> '2009-04-16',
                'tempat_lahir'=> 'Bandung',
                'agama'=> 'Islam',
                'alamat'=> 'Rancamanyar',
                'telepon'=> '081282469044',
                'email'=> 'aliva@gmail.com',
            ],
        ]);
    }
}
