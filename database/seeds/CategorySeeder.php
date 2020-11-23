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
            'name' => "videokaarten",
            'label' => "Videokaarten",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "processoren",
            'label' => "Processoren",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "moederborded",
            'label' => "Moederborden",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "behuizingen",
            'label' => "Behuizingen",
            'created_at' => Date::now(),
        ]);
        DB::table('categories')->insert([
            'name' => "geheugen",
            'label' => "Geheugen",
            'created_at' => Date::now(),
        ]);
    }
}
