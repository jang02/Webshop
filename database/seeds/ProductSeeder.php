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
            'label' => "Gigabyte GeForce RTX 2080 Super Aorus Waterforce WB 8G Videokaart",
            'description' => "{
                \"Merk\": \"Gigabyte\",
                \"Form factor\": \"GeForce RTX 2080 Super\",
                \"Videogeheugen\": \"8192 MB\",
                \"CUDA cores\": \"3072\",
                \"VGA Geheugen type\": \"GDDR6\",
                \"EAN\": \"4719331305369\",
                \"Vendorcode\": \"GV-N208SAORUS WB-8GC\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1073869/midi/1_Gigabyte-GeForce-RTX-2080-Super-Aorus-Waterforce-WB-8G-Videokaart.jpg",
            'price' => 989.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1660 SUPER VENTUS XS OC Videokaart",
            'description' => "{
                \"Merk\": \"MSI\",
                \"Form factor\": \"GeForce GTX 1660 SUPER\",
                \"Videogeheugen\": \"6144 MB\",
                \"CUDA cores\": \"1408\",
                \"VGA Geheugen type\": \"GDDR6\",
                \"EAN\": \"4719072681852\",
                \"Vendorcode\": \"GEFORCE GTX 1660 SUPER VENTUS\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/276651/midi/1_MSI-GeForce-GTX-1660-SUPER-VENTUS-XS-OC-Videokaart.jpg",
            'price' => 241.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1660 SUPER GAMING X Videokaart",
            'description' => "{
                \"Merk\": \"MSI\",
                \"Form factor\": \"GeForce GTX 1660 SUPER\",
                \"Videogeheugen\": \"6144 MB\",
                \"CUDA cores\": \"1408\",
                \"VGA Geheugen type\": \"GDDR6\",
                \"EAN\": \"4719072681043\",
                \"Vendorcode\": \"GeForce GTX 1660 SUPER GAMING\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/277158/midi/1_MSI-GeForce-GTX-1660-SUPER-GAMING-X-Videokaart.jpg",
            'price' => 271.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gigabyte",
            'label' => "Gigabyte GeForce RTX 2060 D6 6G Videokaart",
            'description' => "{
                \"Merk\": \"Gigabyte\",
                \"Form factor\": \"GeForce RTX 2060\",
                \"Videogeheugen\": \"6144 MB\",
                \"CUDA cores\": \"1920\",
                \"VGA Geheugen type\": \"GDDR6\",
                \"EAN\": \"4719331304263\",
                \"Vendorcode\": \"GV-N2060OC-6GD\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1032614/midi/1_Gigabyte-GeForce-RTX-2060-OC-6G-Videokaart.jpg",
            'price' => 320.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI GeForce GTX 1050 TI GAMING X 4G Videokaart",
            'description' => "{
                \"Merk\": \"MSI\",
                \"Form factor\": \"GeForce GTX 1050 Ti\",
                \"Videogeheugen\": \"4096 MB\",
                \"CUDA cores\": \"768\",
                \"VGA Geheugen type\": \"GDDR5\",
                \"EAN\": \"4719072487553\",
                \"Vendorcode\": \"GTX 1050 TI GAMING X 4G\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/993331/midi/1_MSI-GeForce-GTX-1050-TI-GAMING-X-4G-Videokaart.jpg",
            'price' => 149.00,
            'category_id' => "1",
            'created_at' => Date::now(),
        ]);

        //processors
        DB::table('products')->insert([
            'name' => "amd",
            'label' => "AMD Ryzen 5 3600 processor",
            'description' => "{
                \"Merk\": \"AMD\",
                \"Processor Serie\": \"AMD Ryzen 5\",
                \"Processor Model\": \"3600\",
                \"Socket\": \"AM4\",
                \"Processor Snelheid\": \"3.60 GHz\",
                \"Processor Cores\": \"6 (Hexa-Core)\",
                \"Inclusief koeler\": \"Ja\",
                \"TDP (max)\": \"65 Watt\",
                \"EAN\": \"4719072487553\",
                \"Vendorcode\": \"GTX 1050 TI GAMING X 4G\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/261303/midi/1_AMD-Ryzen-5-3600-processor.jpg",
            'price' => 215.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i5 10600K",
            'description' => "{
                \"Merk\": \"Intel\",
                \"Processor Serie\": \"Intel Core i5\",
                \"Processor Cores\": \"6 (Hexa-Core)\",
                \"Hyper-threading\": \"Ja\",
                \"Inclusief koeler\": \"Nee\",
                \"EAN\": \"5032037188647\",
                \"Vendorcode\": \"BX8070110600K\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/285185/midi/1_Intel-Core-i5-10600K.jpg",
            'price' => 250.00,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "amd",
            'label' => "AMD Ryzen 7 2700X processor",
            'description' => "{
                \"Merk\": \"AMD\",
                \"Processor Serie\": \"AMD Ryzen 7\",
                \"Processor Model\": \"2700X\",
                \"Socket\": \"AM4\",
                \"Processor Snelheid\": \"3.70 GHz\",
                \"Processor Cores\": \"8 (Octa-Core)\",
                \"Geïntegreerde graphics\": \"Nee\",
                \"Inclusief koeler\": \"Ja\",
                \"TDP (max)\": \"105 Watt\",
                \"EAN\": \"0730143309202\",
                \"Vendorcode\": \"YD270XBGAFBOX\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/999986/midi/1_AMD-Ryzen-7-2700X-processor.jpg",
            'price' => 185.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i7 10700K",
            'description' => "{
                \"Merk\": \"Intel\",
                \"Processor Serie\": \"Intel Core i7\",
                \"Processor Cores\": \"8 (Octa-Core)\",
                \"Hyper-threading\": \"Ja\",
                \"Inclusief koeler\": \"Nee\",
                \"EAN\": \"5032037188609\",
                \"Vendorcode\": \"BX8070110700K\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/285184/midi/1_Intel-Core-i7-10700K.jpg",
            'price' => 375.05,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "intel",
            'label' => "Intel Core i7 9700K processor",
            'description' => "{
                \"Merk\": \"Intel\",
                \"Processor Serie\": \"Intel Core i7\",
                \"Processor Model\": \"9700K\",
                \"Processor Cores\": \"8 (Octa-Core)\",
                \"Processor Snelheid\": \"3.60 GHz\",
                \"Inclusief koeler\": \"Nee\",
                \"EAN\": \"675901709767\",
                \"Vendorcode\": \"BX80684I79700K\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/271254/midi/1_Intel-Core-i7-9700K-processor.jpg",
            'price' => 292.00,
            'category_id' => "2",
            'created_at' => Date::now(),
        ]);

        //motherboards
        DB::table('products')->insert([
            'name' => "asus",
            'label' => "Asus ROG STRIX B450-F GAMING moederbord",
            'description' => "{
                \"Merk\": \"Asus\",
                \"Form factor\": \"ATX\",
                \"Chipset\": \"AMD B450\",
                \"Geheugen slots\": \"4 x\",
                \"Max. Geheugen\": \"64 GB\",
                \"AMD CrossFire\": \"Ja\",
                \"M.2 Slot aanwezig\": \"Ja\",
                \"EAN\": \"4718017080279\",
                \"Vendorcode\": \"90MB0YS0-M0EAY0\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/233925/midi/1_Asus-ROG-STRIX-B450-F-GAMING-moederbord.jpg",
            'price' => 99.99,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "msi",
            'label' => "MSI MAG B550 TOMAHAWK moederbord",
            'description' => "{
                \"Merk\": \"MSI\",
                \"Form factor\": \"ATX\",
                \"Chipset\": \"AMD B550\",
                \"Geheugen slots\": \"4 x\",
                \"Max. Geheugen\": \"128 GB\",
                \"AMD CrossFire\": \"Ja\",
                \"M.2 Slot aanwezig\": \"Ja\",
                \"EAN\": \"4719072728625\",
                \"Vendorcode\": \"MAG B550 TOMAHAWK\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/287622/midi/1_MSI-MAG-B550-TOMAHAWK-moederbord.jpg",
            'price' => 165.00,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gigabyte",
            'label' => "Gigabyte X570 AORUS ELITE moederbord",
            'description' => "{
                \"Merk\": \"Gigabyte\",
                \"Form factor\": \"ATX\",
                \"Chipset\": \"AMD X570\",
                \"Geheugen slots\": \"4 x\",
                \"Max. Geheugen\": \"128 GB\",
                \"AMD CrossFire\": \"Ja\",
                \"M.2 Slot aanwezig\": \"Ja\",
                \"EAN\": \"4719331806439\",
                \"Vendorcode\": \"X570 AORUS ELITE\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/262301/midi/1_Gigabyte-X570-AORUS-ELITE-moederbord.jpg",
            'price' => 181.05,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "asus",
            'label' => "Asus TUF GAMING B550-PLUS moederbord",
            'description' => "{
                \"Merk\": \"Asus\",
                \"Form factor\": \"ATX\",
                \"Chipset\": \"AMD B550\",
                \"Geheugen slots\": \"4 x\",
                \"Max. Geheugen\": \"128 GB\",
                \"AMD CrossFire\": \"Ja\",
                \"Nvidia SLI\": \"Nee\",
                \"M.2 Slot aanwezig\": \"Ja\",
                \"EAN\": \"4718017749435\",
                \"Vendorcode\": \"90MB14G0-M0EAY0\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/287416/midi/1_Asus-TUF-GAMING-B550-PLUS-moederbord.jpg",
            'price' => 131.05,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "asrock",
            'label' => "Asrock B450M STEEL LEGEND moederbord",
            'description' => "{
                \"Merk\": \"Asrock\",
                \"Form factor\": \"Micro-ATX\",
                \"Chipset\": \"AMD B450\",
                \"Geheugen slots\": \"4 x\",
                \"Max. Geheugen\": \"64 GB\",
                \"AMD CrossFire\": \"Ja\",
                \"M.2 Slot aanwezig\": \"Ja\",
                \"EAN\": \"4717677338072\",
                \"Vendorcode\": \"90-MXB9Y0-A0UAYZ\",
                \"Garantie\": \"24 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/248686/midi/1_Asrock-B450M-STEEL-LEGEND-moederbord.jpg",
            'price' => 81.00,
            'category_id' => "3",
            'created_at' => Date::now(),
        ]);

        //casing
        DB::table('products')->insert([
            'name' => "lian",
            'label' => "Lian Li Lancool II Zwart Midi Tower Behuizing",
            'description' => "{
                \"Merk\": \"Lian-Li\",
                \"Form factor moederbord\": \"ATX, E-ATX, ITX, Micro-ATX\",
                \"Geïnstalleerde Fans voorkant\": \"1x 120mm\",
                \"Geïnstalleerde Fans achterkant\": \"1x 120mm\",
                \"Geïnstalleerde Fans bovenkant\": \"1x 120mm\",
                \"Maximum CPU cooler hoogte\": \"17.6 cm\",
                \"Maximum grafische kaart lengte\": \"38.4 cm\",
                \"Maximum PSU lengte\": \"21 cm\",
                \"Materiaal\": \"Gehard glas, SGCC\",
                \"Inclusief voeding\": \"Nee\",
                \"EAN\": \"4717677338072\",
                \"Vendorcode\": \"90-MXB9Y0-A0UAYZ\",
                \"Garantie\": \"24 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1098024/midi/1_Lian-Li-Lancool-II-Zwart-Midi-Tower-Behuizing.jpg",
            'price' => 99.95,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "nzxt",
            'label' => "NZXT H510 White - Black Midi Tower Behuizing",
            'description' => "{
                \"Merk\": \"NZXT\",
                \"Form factor moederbord\": \"ATX, Micro-ATX, Mini-ATX\",
                \"Maximum CPU cooler hoogte\": \"16.5 cm\",
                \"Maximum grafische kaart lengte\": \"38.1 cm\",
                \"Materiaal\": \"SGCC, Staal\",
                \"EAN\": \"506030169506\",
                \"Vendorcode\": \"CA-H510B-W1\",
                \"Garantie\": \"24 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1066280/midi/1_NZXT-H510-White-Black-Midi-Tower-Behuizing.jpg",
            'price' => 74.90,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "quiet",
            'label' => "Pure Base 500DX Black Midi Tower Behuizing",
            'description' => "{
                \"Merk\": \"be quiet!\",
                \"Form factor moederbord\": \"ATX, Micro-ATX, Mini-ITX\",
                \"Geïnstalleerde Fans voorkant\": \"1x 140mm\",
                \"Geïnstalleerde Fans achterkant\": \"1x 140mm\",
                \"Maximum CPU cooler hoogte\": \"19 cm\",
                \"Maximum grafische kaart lengte\": \"36.9 cm\",
                \"Materiaal\": \"ABS, Staal\",
                \"Inclusief voeding\": \"Nee\",
                \"EAN\": \"4260052187821\",
                \"Vendorcode\": \"BG034\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1096008/midi/1_be-quiet-Pure-Base-500DX-Black-Midi-Tower-Behuizing.jpg",
            'price' => 95.95,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "quiet",
            'label' => "Pure Base 500 Black Midi Tower Behuizing",
            'description' => "{
                \"Merk\": \"be quiet!\",
                \"Form factor moederbord\": \"ATX, Micro-ATX, Mini-ITX\",
                \"Geïnstalleerde Fans voorkant\": \"1x 140mm\",
                \"Geïnstalleerde Fans achterkant\": \"1x 140mm\",
                \"Maximum CPU cooler hoogte\": \"19 cm\",
                \"Maximum grafische kaart lengte\": \"36.9 cm\",
                \"Materiaal\": \"ABS, Staal\",
                \"Inclusief voeding\": \"Nee\",
                \"EAN\": \"4260052187821\",
                \"Vendorcode\": \"BG034\",
                \"Garantie\": \"36 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1081523/midi/1_be-quiet-Pure-Base-500-Black-Midi-Tower-Behuizing.jpg",
            'price' => 57.90,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "antec",
            'label' => "Antec NX210 Midi Tower Behuizing",
            'description' => "{
                \"Merk\": \"Antec\",
                \"Form factor moederbord\": \"ATX, ITX, Micro-ATX\",
                \"Geïnstalleerde Fans voorkant\": \"3x 120mm\",
                \"Geïnstalleerde Fans achterkant\": \"1x 120mm\",
                \"Maximum CPU cooler hoogte\": \"15.5 cm\",
                \"Maximum grafische kaart lengte\": \"31 cm\",
                \"Maximum PSU lengte\": \"22 cm\",
                \"Materiaal\": \"Plastic, SPCC\",
                \"EAN\": \"761345810203\",
                \"Vendorcode\": \"0-761345-81020-3\",
                \"Garantie\": \"24 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1092781/midi/1_Antec-NX210-Midi-Tower-Behuizing.jpg",
            'price' => 45.05,
            'category_id' => "4",
            'created_at' => Date::now(),
        ]);

        //memory
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance LPX 2x8GB 3200 C16 Geheugenmodule",
            'description' => "{
                \"Merk\": \"Corsair\",
                \"Modules (aantal)\": \"2 stuk(s)\",
                \"Geheugen capaciteit\": \"16 GB\",
                \"Geheugen snelheid\": \"3200 MHz\",
                \"Timings\": \"CL 16 (CAS-tRCD-tRPD-tRAS)\",
                \"Kleur product\": \"Zwart\",
                \"LED verlichting\": \"Nee\",
                \"EAN\": \"0843591070454\",
                \"Vendorcode\": \"CMK16GX4M2B3200C16\",
                \"Garantie\": \"120 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/351421/midi/1_Corsair-DDR4-Vengeance-LPX-2x8GB-3200-C16-Geheugenmodule.jpg",
            'price' => 66.00,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance RGB Pro 2x8GB 3200 - [CMW16GX4M2C3200C16] Geheugenmodule",
            'description' => "{
                \"Merk\": \"Corsair\",
                \"Modules (aantal)\": \"2 stuk(s)\",
                \"Geheugen capaciteit\": \"16 GB\",
                \"Geheugen snelheid\": \"3200 MHz\",
                \"Timings\": \"CL 16 (CAS-tRCD-tRPD-tRAS)\",
                \"Kleur product\": \"Zwart\",
                \"LED verlichting\": \"Ja\",
                \"EAN\": \"843591075381\",
                \"Vendorcode\": \"CMW16GX4M2C3200C16\",
                \"Garantie\": \"120 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1005950/midi/1_Corsair-DDR4-Vengeance-RGB-Pro-2x8GB-3200-CMW16GX4M2C3200C16-Geheugenmodule.jpg",
            'price' => 77.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gskill",
            'label' => "G.Skill DDR4 Aegis 2x8GB 3200MHz - [F4-3200C16D-16GIS] Geheugenmodule",
            'description' => "{
                \"Merk\": \"G.Skill\",
                \"Modules (aantal)\": \"2 stuk(s)\",
                \"Geheugen capaciteit\": \"16 GB\",
                \"Geheugen snelheid\": \"3200 MHz\",
                \"Timings\": \"CL 16 (CAS-tRCD-tRPD-tRAS)\",
                \"LED verlichting\": \"Nee\",
                \"EAN\": \"4713294224385\",
                \"Vendorcode\": \"F4-3200C16D-16GIS\",
                \"Garantie\": \"120 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1085517/midi/3_G-Skill-DDR4-Aegis-2x8GB-3200MHz-F4-3200C16D-16GIS-Geheugenmodule.jpg",
            'price' => 60.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "corsair",
            'label' => "Corsair DDR4 Vengeance LPX 2x8GB 3600 Geheugenmodule",
            'description' => "{
                \"Merk\": \"G.Skill\",
                \"Modules (aantal)\": \"2 stuk(s)\",
                \"Geheugen capaciteit\": \"16 GB\",
                \"Geheugen snelheid\": \"3600 MHz\",
                \"Kleur product\": \"Zwart\",
                \"LED verlichting\": \"Nee\",
                \"EAN\": \"840006621553\",
                \"Vendorcode\": \"CMK16GX4M2C3600C20\",
                \"Garantie\": \"120 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/282105/midi/1_Corsair-DDR4-Vengeance-LPX-2x8GB-3600-Geheugenmodule.jpg",
            'price' => 68.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
        DB::table('products')->insert([
            'name' => "gskill",
            'label' => "G.Skill DDR4 Trident-Z 2x8GB 3600MHz RGB - [F4-3600C18D-16GTZRX] Geheugenmodule",
            'description' => "{
                \"Merk\": \"G.Skill\",
                \"Modules (aantal)\": \"2 stuk(s)\",
                \"Geheugen capaciteit\": \"16 GB\",
                \"Geheugen snelheid\": \"3600 MHz\",
                \"Timings\": \"CL 18 (CAS-tRCD-tRPD-tRAS)\",
                \"LED verlichting\": \"Ja\",
                \"EAN\": \"4713294220462\",
                \"Vendorcode\": \"F4-3600C18D-16GTZRX\",
                \"Garantie\": \"120 Maanden\"
            }",
            'photo' => "https://www.megekko.nl/productimg/1037237/midi/5_G-Skill-DDR4-Trident-Z-2x8GB-3600MHz-RGB-F4-3600C18D-16GTZRX-Geheugenmodule.jpg",
            'price' => 97.90,
            'category_id' => "5",
            'created_at' => Date::now(),
        ]);
    }
}
