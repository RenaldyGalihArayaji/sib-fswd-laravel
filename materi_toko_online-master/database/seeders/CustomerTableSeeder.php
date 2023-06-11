<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Customer::create([
        //     'nama' => 'Agus Budi',
        //     'email' => 'agus@gmail.com',
        //     'alamat' => 'Surabaya',
        // ]);

        // Customer::create([
        //     'nama' => 'John Doe',
        //     'email' => 'john@gmail.com',
        //     'alamat' => 'Jakarta',
        // ]);

        Customer::factory()->count(10)->create();
    }
}
