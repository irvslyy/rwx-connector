<?php

use Illuminate\Database\Seeder;

class TrainsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Train::create([
        	'nama' => str_random(20),
        	'email' => str_random(20),
        	'alamat' => str_random(20),
        	'paket' => str_random(20),
        	'pembimbing' => str_random(20)
        ]);
        factory(\App\Train::class, 20)->create();
    }
}
