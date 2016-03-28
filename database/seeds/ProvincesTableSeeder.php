<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(Storage::get('sql/provinces.sql'));
        DB::statement(Storage::get('sql/cities.sql'));
    }
}
