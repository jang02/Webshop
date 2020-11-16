<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "testItem1",
            'label' => "testItem1",
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "testItem2",
            'label' => "testItem2",
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "testItem3",
            'label' => "testItem3",
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
    }
}
