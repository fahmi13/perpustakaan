<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('id_ID');

        /*($i=1;$i<=10;$i++){
            DB::table('buku')->insert([
                'buku_judul'
            ]);
        }*/
    }
}
