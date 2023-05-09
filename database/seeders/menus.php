<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menus extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->truncate();

        DB::table('menus')->insert([
            ['nama' => 'Americano 1','deskripsi' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.','harga' => 30,'gambar'=>'img/menu-1.jpg'],
            ['nama' => 'Americano 2','deskripsi' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.','harga' => 20,'gambar'=>'img/menu-2.jpg'],
            ['nama' => 'Americano 3','deskripsi' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.','harga' => 15,'gambar'=>'img/menu-3.jpg'],
            ['nama' => 'Americano 4','deskripsi' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.','harga' => 25,'gambar'=>'img/menu-4.jpg'],
            ['nama' => 'Americano 5','deskripsi' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. Red ipsum.','harga' => 45,'gambar'=>'img/menu-5.jpg'],
        ]);
    }
}
