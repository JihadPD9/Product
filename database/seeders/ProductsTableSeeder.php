<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
            [
                'name'          => 'Basreng',
                'description'   => 'Basreng Enak Dan Gurih',
                'price'         => 1000,
                'stock'         => 1000,
            ],
            [
                'name'          => 'Baso',
                'description'   => 'Baso Enak Dan Gurih',
                'price'         => 2000,
                'stock'         => 2000,
            ],
            [
                'name'          => 'Batagor',
                'description'   => 'Batagor Enak Dan Gurih',
                'price'         => 3000,
                'stock'         => 3000,
            ],
            [
                'name'          => 'Sosis',
                'description'   => 'Sosis Enak Dan Gurih',
                'price'         => 4000,
                'stock'         => 4000,
            ],
            [
                'name'          => 'Pangsit',
                'description'   => 'Pangsit Enak Dan Gurih',
                'price'         => 5000,
                'stock'         => 5000,
            ],
            [
                'name'          => 'Cilok',
                'description'   => 'Cilok Enak Dan Gurih',
                'price'         => 6000,
                'stock'         => 6000,
            ],
            [
                'name'          => 'Karoket',
                'description'   => 'Karoket Enak Dan Gurih',
                'price'         => 7000,
                'stock'         => 7000,
            ],
            [
                'name'          => 'Risol',
                'description'   => 'Risol Enak Dan Gurih',
                'price'         => 8000,
                'stock'         => 8000,
            ],
            [
                'name'          => 'Roti',
                'description'   => 'Roti Enak Dan Gurih',
                'price'         => 9000,
                'stock'         => 9000,
            ],
            [
                'name'          => 'Usus',
                'description'   => 'Usus Enak Dan Gurih',
                'price'         => 10000,
                'stock'         => 10000,
            ],
        ]);
    }
}
