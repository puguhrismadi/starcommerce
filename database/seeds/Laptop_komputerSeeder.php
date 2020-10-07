<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Laptop_komputer;
class Laptop_komputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){

            // insert data ke table pegawai menggunakan Faker
          DB::table('laptop_komputers')->insert([
              'nama' => $faker->name,
              'kategoriproduks_id' =>'1',
              'brands_id' => $faker->numberBetween(1,5),
              'harga' => $faker->numberBetween(4500000,1800000),
              'quantity'=>$faker->numberBetween(5,15),
              'deskripsi'=>"Deskripsi produk dummy",
              'gambar1'=>"laptop-komputers/September2020/DYddrafZ8GAcpMyLvGXY.jpg",
              'gambar2'=>"laptop-komputers/September2020/elFuZQ7DIGzJpyHappvO.jpg",
              'gambar3'=>"laptop-komputers/September2020/elFuZQ7DIGzJpyHappvO.jpg",
              'feature'=>"0",
              'spek_processor'=>"Intel Core i7 Processor",
              'spek_ram'=>"4 GB",
              'spek_memory_speed'=>"4000 Mhz",
              'spek_vga'=>"2 GB",
              'spek_os'=>"No OS",
              'spek_storage'=>"500 GB",
              'display'=>"14 inch",
              'archieved'=>"0"
          ]);
        }
    }
}
