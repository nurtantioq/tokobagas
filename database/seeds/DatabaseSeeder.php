<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $tables = [
            'users', 'categories', 'ads', 'cities', 'provinces'
        ];

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        $this->call(CategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);

        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
