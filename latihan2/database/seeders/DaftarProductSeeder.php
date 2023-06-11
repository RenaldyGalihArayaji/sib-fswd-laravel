<?php

namespace Database\Seeders;

use App\Models\DaftarProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaftarProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DaftarProduct::create([
            'name' => 'asuz',
            'category_id '=> 1,
            'qty'=> 10,
            'price' => '5000000',
            'description'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'image'=>'asuz.jpg',
        ]);

        DaftarProduct::create([
            'name' => 'lenovo',
            'category_id '=> 1,
            'qty'=> 5,
            'price' => '3000000',
            'description'=>'dfnbnmfbndbfndbfjhddhgdhgfhghgfdhghjg',
            'image'=>'lenovo.jpg',
        ]);
    }
}
