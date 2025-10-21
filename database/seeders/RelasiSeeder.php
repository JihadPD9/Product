<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Muhammad Jihad Putra Drajat',
            'nim' => '123455',
        ]);

        Wali::create([
            'nama' => 'Pak James',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
