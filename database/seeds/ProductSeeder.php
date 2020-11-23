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
        //videocards
        DB::table('products')->insert([
            'name' => "gigabyte",
            'label' => "Gigabyte Geforce RTX 2060 OC 6G Videokaart",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1032614/midi/1_Gigabyte-GeForce-RTX-2060-OC-6G-Videokaart.jpg",
            'price' => 316.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1660 SUPER VENTUS XS OC Videokaart",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/276651/midi/1_MSI-GeForce-GTX-1660-SUPER-VENTUS-XS-OC-Videokaart.jpg",
            'price' => 241.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1660 SUPER GAMING X Videokaart",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/277158/midi/1_MSI-GeForce-GTX-1660-SUPER-GAMING-X-Videokaart.jpg",
            'price' => 271.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gigabyte",
            'label' => "Gigabyte GeForce RTX 2060 D6 6G Videokaart",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1106213/midi/1_Gigabyte-GeForce-RTX-2060-D6-6G-Videokaart.jpg",
            'price' => 320.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1050 TI GAMING X 4G Videokaart",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/993331/midi/1_MSI-GeForce-GTX-1050-TI-GAMING-X-4G-Videokaart.jpg",
            'price' => 149.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);

        //processors
        DB::table('products')->insert([
            'name' => "amd",
            'label' => "AMD Ryzen 5 3600 processor",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/261303/midi/1_AMD-Ryzen-5-3600-processor.jpg",
            'price' => 215.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i5 10600K",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/285185/midi/1_Intel-Core-i5-10600K.jpg",
            'price' => 250.00,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "amd",
            'label' => "AMD Ryzen 7 2700X processor",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/999986/midi/1_AMD-Ryzen-7-2700X-processor.jpg",
            'price' => 185.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i7 10700K",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/285184/midi/1_Intel-Core-i7-10700K.jpg",
            'price' => 375.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i7 9700K processor",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/271254/midi/1_Intel-Core-i7-9700K-processor.jpg",
            'price' => 292.00,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);

        //motherboards
        DB::table('products')->insert([
            'name' => "asus",
            'label' => "Asus ROG STRIX B450-F GAMING moederbord",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/233925/midi/1_Asus-ROG-STRIX-B450-F-GAMING-moederbord.jpg",
            'price' => 99.99,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI MAG B550 TOMAHAWK moederbord",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/287622/midi/1_MSI-MAG-B550-TOMAHAWK-moederbord.jpg",
            'price' => 165.00,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gigabyte",
            'label' => "Gigabyte X570 AORUS ELITE moederbord",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/262301/midi/1_Gigabyte-X570-AORUS-ELITE-moederbord.jpg",
            'price' => 181.05,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "asus",
            'label' => "Asus TUF GAMING B550-PLUS moederbord",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/287416/midi/1_Asus-TUF-GAMING-B550-PLUS-moederbord.jpg",
            'price' => 131.05,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "asrock",
            'label' => "Asrock B450M STEEL LEGEND moederbord",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/248686/midi/1_Asrock-B450M-STEEL-LEGEND-moederbord.jpg",
            'price' => 81.00,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);

        //casing
        DB::table('products')->insert([
            'name' => "lian",
            'label' => "Lian Li PC-O11 Dynamic XL (ROG Certified) White Midi Tower Behuizing",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1085792/midi/1_Lian-Li-PC-O11-Dynamic-XL-ROG-Certified-White-Midi-Tower-Behuizing.jpg",
            'price' => 199.90,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "nzxt",
            'label' => "NZXT H510 White - Black Midi Tower Behuizing",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1066280/midi/1_NZXT-H510-White-Black-Midi-Tower-Behuizing.jpg",
            'price' => 74.90,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "quiet",
            'label' => "Pure Base 500DX Black Midi Tower Behuizing",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1096008/midi/1_be-quiet-Pure-Base-500DX-Black-Midi-Tower-Behuizing.jpg",
            'price' => 95.95,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "quiet",
            'label' => "Pure Base 500 Black Midi Tower Behuizing",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1081523/midi/1_be-quiet-Pure-Base-500-Black-Midi-Tower-Behuizing.jpg",
            'price' => 57.90,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "antec",
            'label' => "Antec NX210 Midi Tower Behuizing",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1092781/midi/1_Antec-NX210-Midi-Tower-Behuizing.jpg",
            'price' => 45.05,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);

        //memory
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance LPX 2x8GB 3200 C16 Geheugenmodule",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/351421/midi/1_Corsair-DDR4-Vengeance-LPX-2x8GB-3200-C16-Geheugenmodule.jpg",
            'price' => 66.00,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance RGB Pro 2x8GB 3200 - [CMW16GX4M2C3200C16] Geheugenmodule",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1005950/midi/1_Corsair-DDR4-Vengeance-RGB-Pro-2x8GB-3200-CMW16GX4M2C3200C16-Geheugenmodule.jpg",
            'price' => 77.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gskill",
            'label' => "G.Skill DDR4 Aegis 2x8GB 3200MHz - [F4-3200C16D-16GIS] Geheugenmodule",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1085517/midi/3_G-Skill-DDR4-Aegis-2x8GB-3200MHz-F4-3200C16D-16GIS-Geheugenmodule.jpg",
            'price' => 60.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance LPX 2x8GB 3600 Geheugenmodule",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/282105/midi/1_Corsair-DDR4-Vengeance-LPX-2x8GB-3600-Geheugenmodule.jpg",
            'price' => 68.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gskill",
            'label' => "G.Skill DDR4 Trident-Z 2x8GB 3600MHz RGB - [F4-3600C18D-16GTZRX] Geheugenmodule",
            'description' => "Default desc",
            'photo' => "https://www.megekko.nl/productimg/1037237/midi/5_G-Skill-DDR4-Trident-Z-2x8GB-3600MHz-RGB-F4-3600C18D-16GTZRX-Geheugenmodule.jpg",
            'price' => 97.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
    }
}
