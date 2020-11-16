<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "test",
            'label' => "test",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "test2",
            'label' => "test2",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "test3",
            'label' => "test3",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "test4",
            'label' => "test4",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "test5",
            'label' => "test5",
            'created_at' => Date::now(),
        ]);
    }
}
