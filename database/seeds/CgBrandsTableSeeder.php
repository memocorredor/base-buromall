<?php

use Illuminate\Database\Seeder;

class CgBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('cg_brands')->delete();

        DB::table('cg_brands')->insert(array (
            0 =>
            array (
                'id' => 1,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Acebo\'s',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            1 =>
            array (
                'id' => 2,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Addict-Initial',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            2 =>
            array (
                'id' => 3,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Adidas Originals',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            3 =>
            array (
                'id' => 4,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Adidas Performance',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            4 =>
            array (
                'id' => 5,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aerosoles',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            5 =>
            array (
                'id' => 6,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aigle',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            6 =>
            array (
                'id' => 7,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Airwalk',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            7 =>
            array (
                'id' => 8,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Alain Bastiani',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            8 =>
            array (
                'id' => 9,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aldo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            9 =>
            array (
                'id' => 10,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Amelie Pichard',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            10 =>
            array (
                'id' => 11,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'American College',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            11 =>
            array (
                'id' => 12,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Anaki',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            12 =>
            array (
                'id' => 13,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'André',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            13 =>
            array (
                'id' => 14,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Anna Volodia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            14 =>
            array (
                'id' => 15,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Annabel Winship',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            15 =>
            array (
                'id' => 16,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Annabella Club',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            16 =>
            array (
                'id' => 17,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Anniel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            17 =>
            array (
                'id' => 18,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Antik Batik',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            18 =>
            array (
                'id' => 19,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Any Boots',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            19 =>
            array (
                'id' => 20,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Apepazza',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            20 =>
            array (
                'id' => 21,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'APL Anonym',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            21 =>
            array (
                'id' => 22,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Apologie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            22 =>
            array (
                'id' => 23,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ara',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            23 =>
            array (
                'id' => 24,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Arena',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            24 =>
            array (
                'id' => 25,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Arian',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            25 =>
            array (
                'id' => 26,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Arima pour Elle',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            26 =>
            array (
                'id' => 27,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Arsène',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            27 =>
            array (
                'id' => 28,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Art',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            28 =>
            array (
                'id' => 29,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Asfvlt',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            29 =>
            array (
                'id' => 30,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Asics',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            30 =>
            array (
                'id' => 31,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Asolo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            31 =>
            array (
                'id' => 32,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Atelier Mercadal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            32 =>
            array (
                'id' => 33,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Atelier Voisin',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            33 =>
            array (
                'id' => 34,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Avril Gau',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            34 =>
            array (
                'id' => 35,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'B Store',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            35 =>
            array (
                'id' => 36,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Banana Moon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            36 =>
            array (
                'id' => 37,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Barachini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            37 =>
            array (
                'id' => 38,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Be only',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            38 =>
            array (
                'id' => 39,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Be&D',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            39 =>
            array (
                'id' => 40,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'BEDROOM ATHLETICS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            40 =>
            array (
                'id' => 41,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Belle',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            41 =>
            array (
                'id' => 42,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Belmondo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            42 =>
            array (
                'id' => 43,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bensimon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            43 =>
            array (
                'id' => 44,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Berenice',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            44 =>
            array (
                'id' => 45,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bertie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            45 =>
            array (
                'id' => 46,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Best Mountain',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            46 =>
            array (
                'id' => 47,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Betsey Johnson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            47 =>
            array (
                'id' => 48,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Beyond Skin',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            48 =>
            array (
                'id' => 49,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Billi Bi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            49 =>
            array (
                'id' => 50,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Birkenstock',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            50 =>
            array (
                'id' => 51,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Birki1-1s',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            51 =>
            array (
                'id' => 52,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Björn Borg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            52 =>
            array (
                'id' => 53,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Blackstone',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            53 =>
            array (
                'id' => 54,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Blink',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            54 =>
            array (
                'id' => 55,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bloch',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            55 =>
            array (
                'id' => 56,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Blowfish',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            56 =>
            array (
                'id' => 57,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bluegenex',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            57 =>
            array (
                'id' => 58,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bobbie Burns',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            58 =>
            array (
                'id' => 59,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bobs',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            59 =>
            array (
                'id' => 60,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bocage',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            60 =>
            array (
                'id' => 61,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Boo roo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            61 =>
            array (
                'id' => 62,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bopy Confort',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            62 =>
            array (
                'id' => 63,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bordello',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            63 =>
            array (
                'id' => 64,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Boutique Moschino',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            64 =>
            array (
                'id' => 65,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Boxfresh',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            65 =>
            array (
                'id' => 66,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bronx',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            66 =>
            array (
                'id' => 67,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bruno Premi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            67 =>
            array (
                'id' => 68,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Buffalo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            68 =>
            array (
                'id' => 69,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bugatti',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            69 =>
            array (
                'id' => 70,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Buggy',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            70 =>
            array (
                'id' => 71,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bullboxer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            71 =>
            array (
                'id' => 72,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bunker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            72 =>
            array (
                'id' => 73,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bussola',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            73 =>
            array (
                'id' => 74,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'C.Petula',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            74 =>
            array (
                'id' => 75,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Cafè Noir',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            75 =>
            array (
                'id' => 76,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Camel Active',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            76 =>
            array (
                'id' => 77,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Camper',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            77 =>
            array (
                'id' => 78,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Camper Together',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            78 =>
            array (
                'id' => 79,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Caprice',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            79 =>
            array (
                'id' => 80,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Carel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            80 =>
            array (
                'id' => 81,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Carvela',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            81 =>
            array (
                'id' => 82,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Carven',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            82 =>
            array (
                'id' => 83,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Castaluna',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            83 =>
            array (
                'id' => 84,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Castaner',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            84 =>
            array (
                'id' => 85,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Catarina Martins',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            85 =>
            array (
                'id' => 86,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Caterpillar',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            86 =>
            array (
                'id' => 87,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Charles Jourdan',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            87 =>
            array (
                'id' => 88,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Charlotte Vanel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            88 =>
            array (
                'id' => 89,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Chie Mihara',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            89 =>
            array (
                'id' => 90,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Chipie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            90 =>
            array (
                'id' => 91,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Chocolate Schubar',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            91 =>
            array (
                'id' => 92,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Chooka',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            92 =>
            array (
                'id' => 93,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Clarks',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            93 =>
            array (
                'id' => 94,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Clarks Originals',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            94 =>
            array (
                'id' => 95,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Cloud',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            95 =>
            array (
                'id' => 96,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Coca Cola',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            96 =>
            array (
                'id' => 97,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Coca-cola shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            97 =>
            array (
                'id' => 98,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Coco et abricot',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            98 =>
            array (
                'id' => 99,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Colors of California',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            99 =>
            array (
                'id' => 100,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Columbia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            100 =>
            array (
                'id' => 101,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Converse',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            101 =>
            array (
                'id' => 102,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Coolway',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            102 =>
            array (
                'id' => 103,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'COSMOPARIS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            103 =>
            array (
                'id' => 104,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Costa Costa',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            104 =>
            array (
                'id' => 105,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Couleur Pourpre',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            105 =>
            array (
                'id' => 106,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Creative Recreation',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            106 =>
            array (
                'id' => 107,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Crocs',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            107 =>
            array (
                'id' => 108,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'CULT',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            108 =>
            array (
                'id' => 109,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Cushe',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            109 =>
            array (
                'id' => 110,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'D.A.T.E',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            110 =>
            array (
                'id' => 111,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'DC Shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            111 =>
            array (
                'id' => 112,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'De Siena shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            112 =>
            array (
                'id' => 113,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Demonia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            113 =>
            array (
                'id' => 114,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Derhy',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            114 =>
            array (
                'id' => 115,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Desigual',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            115 =>
            array (
                'id' => 116,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Diesel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            116 =>
            array (
                'id' => 117,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dim',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            117 =>
            array (
                'id' => 118,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Divine Factory',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            118 =>
            array (
                'id' => 119,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'DKNY',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            119 =>
            array (
                'id' => 120,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dkode',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            120 =>
            array (
                'id' => 121,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dockers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            121 =>
            array (
                'id' => 122,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dolfie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            122 =>
            array (
                'id' => 123,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dorking',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            123 =>
            array (
                'id' => 124,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dorotennis',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            124 =>
            array (
                'id' => 125,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'DR. Martens',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            125 =>
            array (
                'id' => 126,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'DUDE',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            126 =>
            array (
                'id' => 127,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dune',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            127 =>
            array (
                'id' => 128,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Earthies',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            128 =>
            array (
                'id' => 129,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ecco',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            129 =>
            array (
                'id' => 130,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ecko',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            130 =>
            array (
                'id' => 131,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Eclipse',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            131 =>
            array (
                'id' => 132,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Eden',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            132 =>
            array (
                'id' => 133,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'El Naturalista',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            133 =>
            array (
                'id' => 134,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Eleven paris',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            134 =>
            array (
                'id' => 135,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Elite',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            135 =>
            array (
                'id' => 136,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Elizabeth Stuart',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            136 =>
            array (
                'id' => 137,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Emma',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            137 =>
            array (
                'id' => 138,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Emma Go',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            138 =>
            array (
                'id' => 139,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Emu Australia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            139 =>
            array (
                'id' => 140,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Enza Nucci',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            140 =>
            array (
                'id' => 141,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ernesto Esposito',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            141 =>
            array (
                'id' => 142,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Espace',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            142 =>
            array (
                'id' => 143,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Esprit',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            143 =>
            array (
                'id' => 144,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Eva Turner',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            144 =>
            array (
                'id' => 145,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fabio Rusconi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            145 =>
            array (
                'id' => 146,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Faguo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            146 =>
            array (
                'id' => 147,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Falke',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            147 =>
            array (
                'id' => 148,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Feiyue',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            148 =>
            array (
                'id' => 149,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Felmini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            149 =>
            array (
                'id' => 150,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Femme +',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            150 =>
            array (
                'id' => 151,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Feud',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            151 =>
            array (
                'id' => 152,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'FILA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            152 =>
            array (
                'id' => 153,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fit for fun',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            153 =>
            array (
                'id' => 154,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'FitFlop',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            154 =>
            array (
                'id' => 155,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Flipflop',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            155 =>
            array (
                'id' => 156,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Flogg',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            156 =>
            array (
                'id' => 157,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fluchos',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            157 =>
            array (
                'id' => 158,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fly London',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            158 =>
            array (
                'id' => 159,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Folk1-1l',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            159 =>
            array (
                'id' => 160,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fornarina',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            160 =>
            array (
                'id' => 161,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'François Najar',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            161 =>
            array (
                'id' => 162,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fratelli Rossetti',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            162 =>
            array (
                'id' => 163,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fred De La Bretonière',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            163 =>
            array (
                'id' => 164,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fred Marzo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            164 =>
            array (
                'id' => 165,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Free Lance',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            165 =>
            array (
                'id' => 166,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Freeman T. Porter',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            166 =>
            array (
                'id' => 167,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'French Connection',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            167 =>
            array (
                'id' => 168,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Friis & company',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            168 =>
            array (
                'id' => 169,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Frye',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            169 =>
            array (
                'id' => 170,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'F-Troupe',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            170 =>
            array (
                'id' => 171,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gaastra',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            171 =>
            array (
                'id' => 172,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gabor',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            172 =>
            array (
                'id' => 173,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Galliano by John Galliano',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            173 =>
            array (
                'id' => 174,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gaspard Yurkievich',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            174 =>
            array (
                'id' => 175,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Georgia Rose',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            175 =>
            array (
                'id' => 176,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Geox',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            176 =>
            array (
                'id' => 177,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Geox By Patrick Cox',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            177 =>
            array (
                'id' => 178,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Giesswein',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            178 =>
            array (
                'id' => 179,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gino Rossi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            179 =>
            array (
                'id' => 180,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gioseppo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            180 =>
            array (
                'id' => 181,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Glerups',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            181 =>
            array (
                'id' => 182,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gola',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            182 =>
            array (
                'id' => 183,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Grendha',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            183 =>
            array (
                'id' => 184,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'G-Star',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            184 =>
            array (
                'id' => 185,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Guess',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            185 =>
            array (
                'id' => 186,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Guess by marciano',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            186 =>
            array (
                'id' => 187,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'H by Hudson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            187 =>
            array (
                'id' => 188,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Harley Davidson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            188 =>
            array (
                'id' => 189,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Havaianas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            189 =>
            array (
                'id' => 190,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'HE Spring',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            190 =>
            array (
                'id' => 191,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hip',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            191 =>
            array (
                'id' => 192,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hispanitas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            192 =>
            array (
                'id' => 193,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hi-Tec',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            193 =>
            array (
                'id' => 194,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'HÖGL',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            194 =>
            array (
                'id' => 195,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Homers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            195 =>
            array (
                'id' => 196,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'House of Harlow 1960',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            196 =>
            array (
                'id' => 197,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Humat',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            197 =>
            array (
                'id' => 198,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hummel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            198 =>
            array (
                'id' => 199,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hunter',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            199 =>
            array (
                'id' => 200,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hush Puppies',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            200 =>
            array (
                'id' => 201,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'I Love Shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            201 =>
            array (
                'id' => 202,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ikks',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            202 =>
            array (
                'id' => 203,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Initiale Paris',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            203 =>
            array (
                'id' => 204,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Intentionally blank',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            204 =>
            array (
                'id' => 205,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Inuovo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            205 =>
            array (
                'id' => 206,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ipanema',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            206 =>
            array (
                'id' => 207,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ippon Vintage',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            207 =>
            array (
                'id' => 208,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Iron Fist',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            208 =>
            array (
                'id' => 209,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Irregular choice',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            209 =>
            array (
                'id' => 210,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Isotoner',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            210 =>
            array (
                'id' => 211,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jana shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            211 =>
            array (
                'id' => 212,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jancovek',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            212 =>
            array (
                'id' => 213,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Janet & Janet',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            213 =>
            array (
                'id' => 214,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Janet Sport',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            214 =>
            array (
                'id' => 215,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'JB MARTIN',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            215 =>
            array (
                'id' => 216,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jb Martin Studio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            216 =>
            array (
                'id' => 217,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jeffrey Campbell',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            217 =>
            array (
                'id' => 218,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jilsen',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            218 =>
            array (
                'id' => 219,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jim Rickey',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            219 =>
            array (
                'id' => 220,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'JJ Footwear',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            220 =>
            array (
                'id' => 221,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Joe Sanchez',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            221 =>
            array (
                'id' => 222,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jonak',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            222 =>
            array (
                'id' => 223,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Joop!',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            223 =>
            array (
                'id' => 224,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Josef Seibel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            224 =>
            array (
                'id' => 225,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jump',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            225 =>
            array (
                'id' => 226,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Just Cavalli',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            226 =>
            array (
                'id' => 227,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'K by Karston',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            227 =>
            array (
                'id' => 228,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kallisté',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            228 =>
            array (
                'id' => 229,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kalso Earth',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            229 =>
            array (
                'id' => 230,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kangaroos',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            230 =>
            array (
                'id' => 231,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kanna',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            231 =>
            array (
                'id' => 232,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kaporal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            232 =>
            array (
                'id' => 233,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Karma of Charme',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            233 =>
            array (
                'id' => 234,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Karston',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            234 =>
            array (
                'id' => 235,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kat Maconie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            235 =>
            array (
                'id' => 236,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'kawasaki',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            236 =>
            array (
                'id' => 237,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Keds',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            237 =>
            array (
                'id' => 238,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kelsi Dagger',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            238 =>
            array (
                'id' => 239,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kennel & Schmenger',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            239 =>
            array (
                'id' => 240,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kenzo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            240 =>
            array (
                'id' => 241,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kesslord',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            241 =>
            array (
                'id' => 242,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kéy Té By Kallisté',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            242 =>
            array (
                'id' => 243,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'KG By Kurt Geiger',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            243 =>
            array (
                'id' => 244,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Khrio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            244 =>
            array (
                'id' => 245,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kiboots',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            245 =>
            array (
                'id' => 246,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kickers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            246 =>
            array (
                'id' => 247,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Koah',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            247 =>
            array (
                'id' => 248,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'L.A.M.B.',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            248 =>
            array (
                'id' => 249,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'L.K. Bennett',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            249 =>
            array (
                'id' => 250,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'LA Gear',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            250 =>
            array (
                'id' => 251,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'La maison de l’espadrille',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            251 =>
            array (
                'id' => 252,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'La Strada',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            252 =>
            array (
                'id' => 253,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lacoste',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            253 =>
            array (
                'id' => 254,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lafuma',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            254 =>
            array (
                'id' => 255,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Laidback London',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            255 =>
            array (
                'id' => 256,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'L1-1Atelier Tropézien',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            256 =>
            array (
                'id' => 257,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Latinas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            257 =>
            array (
                'id' => 258,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Laura Vita',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            258 =>
            array (
                'id' => 259,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lauren by Ralph Lauren',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            259 =>
            array (
                'id' => 260,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Le Chameau',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            260 =>
            array (
                'id' => 261,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Le Coq Sportif',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            261 =>
            array (
                'id' => 262,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Le Mont St Michel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            262 =>
            array (
                'id' => 263,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Le Routard',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            263 =>
            array (
                'id' => 264,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Le temps des cerises',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            264 =>
            array (
                'id' => 265,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lemon Jelly',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            265 =>
            array (
                'id' => 266,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Les Lolitas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            266 =>
            array (
                'id' => 267,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Les P1-1tites Bombes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            267 =>
            array (
                'id' => 268,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Les Tropéziennes par M Belarbi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            268 =>
            array (
                'id' => 269,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Levi\'s',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            269 =>
            array (
                'id' => 270,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lise Lindvig',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            270 =>
            array (
                'id' => 271,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Little Marcel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            271 =>
            array (
                'id' => 272,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lola Cruz',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            272 =>
            array (
                'id' => 273,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lola Espeleta',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            273 =>
            array (
                'id' => 274,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lollipops',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            274 =>
            array (
                'id' => 275,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'London Rebel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            275 =>
            array (
                'id' => 276,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lotus',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            276 =>
            array (
                'id' => 277,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Love Moschino',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            277 =>
            array (
                'id' => 278,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lowa',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            278 =>
            array (
                'id' => 279,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Luciano Barachini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            279 =>
            array (
                'id' => 280,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lulu Castagnette',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            280 =>
            array (
                'id' => 281,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'M PAR M',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            281 =>
            array (
                'id' => 282,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mac Douglas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            282 =>
            array (
                'id' => 283,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Madden Girl',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            283 =>
            array (
                'id' => 284,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Made by SARENZA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            284 =>
            array (
                'id' => 285,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Madison',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            285 =>
            array (
                'id' => 286,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Magic World',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            286 =>
            array (
                'id' => 287,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Maïproject',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            287 =>
            array (
                'id' => 288,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Maloles',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            288 =>
            array (
                'id' => 289,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Manas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            289 =>
            array (
                'id' => 290,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Manitobah',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            290 =>
            array (
                'id' => 291,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'MARC',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            291 =>
            array (
                'id' => 292,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Marc O’Polo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            292 =>
            array (
                'id' => 293,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Marciano',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            293 =>
            array (
                'id' => 294,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Marco',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            294 =>
            array (
                'id' => 295,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Marco Tozzi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            295 =>
            array (
                'id' => 296,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Martinelli',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            296 =>
            array (
                'id' => 297,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mary-Kyri',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            297 =>
            array (
                'id' => 298,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'MAURICE manufacture',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            298 =>
            array (
                'id' => 299,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Maypol',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            299 =>
            array (
                'id' => 300,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Méduse',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            300 =>
            array (
                'id' => 301,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            301 =>
            array (
                'id' => 302,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Méliné',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            302 =>
            array (
                'id' => 303,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Melissa',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            303 =>
            array (
                'id' => 304,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mellow Yellow',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            304 =>
            array (
                'id' => 305,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Melvin & Hamilton',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            305 =>
            array (
                'id' => 306,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Menbur',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            306 =>
            array (
                'id' => 307,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Merrell',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            307 =>
            array (
                'id' => 308,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Metal jeans',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            308 =>
            array (
                'id' => 309,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mexicana',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            309 =>
            array (
                'id' => 310,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Michael Kors',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            310 =>
            array (
                'id' => 311,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Michel Perry',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            311 =>
            array (
                'id' => 312,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Miezko',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            312 =>
            array (
                'id' => 313,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Miista',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            313 =>
            array (
                'id' => 314,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mikaela',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            314 =>
            array (
                'id' => 315,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Millet',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            315 =>
            array (
                'id' => 316,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mine de rien',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            316 =>
            array (
                'id' => 317,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Minelli',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            317 =>
            array (
                'id' => 318,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Minna Parikka',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            318 =>
            array (
                'id' => 319,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Minnetonka',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            319 =>
            array (
                'id' => 320,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'MINORQUINES',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            320 =>
            array (
                'id' => 321,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Missoni',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            321 =>
            array (
                'id' => 322,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mistify',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            322 =>
            array (
                'id' => 323,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mizuno',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            323 =>
            array (
                'id' => 324,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Modern Vintage',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            324 =>
            array (
                'id' => 325,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Moheda',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            325 =>
            array (
                'id' => 326,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Molly Bracken',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            326 =>
            array (
                'id' => 327,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Moon Boot',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            327 =>
            array (
                'id' => 328,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Moova',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            328 =>
            array (
                'id' => 329,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Morgan',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            329 =>
            array (
                'id' => 330,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Moschino Cheap & Chic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            330 =>
            array (
                'id' => 331,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mosquitos',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            331 =>
            array (
                'id' => 332,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Muratti',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            332 =>
            array (
                'id' => 333,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Myma',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            333 =>
            array (
                'id' => 334,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'MySuelly',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            334 =>
            array (
                'id' => 335,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'n.d.c',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            335 =>
            array (
                'id' => 336,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Naturalizer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            336 =>
            array (
                'id' => 337,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Neosens',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            337 =>
            array (
                'id' => 338,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'New Balance',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            338 =>
            array (
                'id' => 339,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'New Lovers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            339 =>
            array (
                'id' => 340,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nike',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            340 =>
            array (
                'id' => 341,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nine West',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            341 =>
            array (
                'id' => 342,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'No Box',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            342 =>
            array (
                'id' => 343,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Noë',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            343 =>
            array (
                'id' => 344,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'One Step',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            344 =>
            array (
                'id' => 345,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'O1-1Neill',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            345 =>
            array (
                'id' => 346,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Onitsuka Tiger',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            346 =>
            array (
                'id' => 347,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Opening Ceremony',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            347 =>
            array (
                'id' => 348,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Opéra national de Paris',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            348 =>
            array (
                'id' => 349,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'OTZ Shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            349 =>
            array (
                'id' => 350,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ozify',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            350 =>
            array (
                'id' => 351,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pajar',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            351 =>
            array (
                'id' => 352,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Palladium',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            352 =>
            array (
                'id' => 353,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Paloma Barcelo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            353 =>
            array (
                'id' => 354,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Palomitas by Paloma Barcelo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            354 =>
            array (
                'id' => 355,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Panama Jack',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            355 =>
            array (
                'id' => 356,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pantofola d1-1Oro',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            356 =>
            array (
                'id' => 357,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Papillio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            357 =>
            array (
                'id' => 358,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pare Gabia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            358 =>
            array (
                'id' => 359,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pastelle',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            359 =>
            array (
                'id' => 360,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Patagonia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            360 =>
            array (
                'id' => 361,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pataugas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            361 =>
            array (
                'id' => 362,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Patricia Blanchet',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            362 =>
            array (
                'id' => 363,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Paul & Betty',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            363 =>
            array (
                'id' => 364,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Paul & Joe Sister',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            364 =>
            array (
                'id' => 365,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pavement',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            365 =>
            array (
                'id' => 366,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Peak performance',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            366 =>
            array (
                'id' => 367,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pediconfort',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            367 =>
            array (
                'id' => 368,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pepe jeans',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            368 =>
            array (
                'id' => 369,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Perlato',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            369 =>
            array (
                'id' => 370,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Peter Kaiser',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            370 =>
            array (
                'id' => 371,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Petite mendigote',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            371 =>
            array (
                'id' => 372,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Piccadilly',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            372 =>
            array (
                'id' => 373,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pieces',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            373 =>
            array (
                'id' => 374,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pikolinos',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            374 =>
            array (
                'id' => 375,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'PintoDiBlu',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            375 =>
            array (
                'id' => 376,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Plakton',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            376 =>
            array (
                'id' => 377,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Planisphere',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            377 =>
            array (
                'id' => 378,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'P-L-D-M By Palladium',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            378 =>
            array (
                'id' => 379,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Poetic Licence',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            379 =>
            array (
                'id' => 380,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pour La Victoire',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            380 =>
            array (
                'id' => 381,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pretty Ballerinas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            381 =>
            array (
                'id' => 382,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Puma',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            382 =>
            array (
                'id' => 383,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Puma by Alexander Mc Queen',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            383 =>
            array (
                'id' => 384,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pura Lopez',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            384 =>
            array (
                'id' => 385,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Quiksilver',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            385 =>
            array (
                'id' => 386,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ravel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            386 =>
            array (
                'id' => 387,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rebecca Balducci',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            387 =>
            array (
                'id' => 388,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Redskins',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            388 =>
            array (
                'id' => 389,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Reebok',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            389 =>
            array (
                'id' => 390,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Reef',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            390 =>
            array (
                'id' => 391,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Refresh',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            391 =>
            array (
                'id' => 392,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Regard',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            392 =>
            array (
                'id' => 393,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Remonte',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            393 =>
            array (
                'id' => 394,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Replay',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            394 =>
            array (
                'id' => 395,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rider',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            395 =>
            array (
                'id' => 396,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rieker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            396 =>
            array (
                'id' => 397,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'RIPICCA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            397 =>
            array (
                'id' => 398,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Robert Clergerie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            398 =>
            array (
                'id' => 399,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rock & Candy',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            399 =>
            array (
                'id' => 400,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rocket Dog',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            400 =>
            array (
                'id' => 401,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rockport',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            401 =>
            array (
                'id' => 402,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Romika',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            402 =>
            array (
                'id' => 403,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rondinaud',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            403 =>
            array (
                'id' => 404,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rosemetal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            404 =>
            array (
                'id' => 405,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Roxy',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            405 =>
            array (
                'id' => 406,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Royal Republiq',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            406 =>
            array (
                'id' => 407,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ruby Brown',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            407 =>
            array (
                'id' => 408,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'S.Oliver',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            408 =>
            array (
                'id' => 409,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Salomon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            409 =>
            array (
                'id' => 410,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sam Edelman',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            410 =>
            array (
                'id' => 411,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Samoa',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            411 =>
            array (
                'id' => 412,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'San Marina',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            412 =>
            array (
                'id' => 413,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sancho Boots',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            413 =>
            array (
                'id' => 414,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sandales de Thaddée',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            414 =>
            array (
                'id' => 415,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sans Interdit',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            415 =>
            array (
                'id' => 416,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Santoni',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            416 =>
            array (
                'id' => 417,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SARENZA HAPPY10',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            417 =>
            array (
                'id' => 418,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sarenza X',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            418 =>
            array (
                'id' => 419,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Saucony',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            419 =>
            array (
                'id' => 420,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Scholl',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            420 =>
            array (
                'id' => 421,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Schott',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            421 =>
            array (
                'id' => 422,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sebago',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            422 =>
            array (
                'id' => 423,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sebago & Gaspard Yurkievich',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            423 =>
            array (
                'id' => 424,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SENSO',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            424 =>
            array (
                'id' => 425,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Serafini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            425 =>
            array (
                'id' => 426,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sergio Rossi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            426 =>
            array (
                'id' => 427,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sergio tomani',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            427 =>
            array (
                'id' => 428,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Shape-Ups',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            428 =>
            array (
                'id' => 429,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Shellys',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            429 =>
            array (
                'id' => 430,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Shellys London',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            430 =>
            array (
                'id' => 431,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Shoe the bear',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            431 =>
            array (
                'id' => 432,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sioux',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            432 =>
            array (
                'id' => 433,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sixty Seven',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            433 =>
            array (
                'id' => 434,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Skechers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            434 =>
            array (
                'id' => 435,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Skin by Finsk',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            435 =>
            array (
                'id' => 436,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sol Sana',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            436 =>
            array (
                'id' => 437,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sole Society',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            437 =>
            array (
                'id' => 438,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Somewhere',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            438 =>
            array (
                'id' => 439,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sonia Rykiel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            439 =>
            array (
                'id' => 440,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sorel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            440 =>
            array (
                'id' => 441,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sperry Top-Sider',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            441 =>
            array (
                'id' => 442,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SPM',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            442 =>
            array (
                'id' => 443,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Spot On',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            443 =>
            array (
                'id' => 444,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Spring Court',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            444 =>
            array (
                'id' => 445,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Startas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            445 =>
            array (
                'id' => 446,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Stephane Gontard',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            446 =>
            array (
                'id' => 447,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Stephane Kélian',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            447 =>
            array (
                'id' => 448,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Steve Madden',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            448 =>
            array (
                'id' => 449,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Stonefly',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            449 =>
            array (
                'id' => 450,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'String Republic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            450 =>
            array (
                'id' => 451,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Studio Pollini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            451 =>
            array (
                'id' => 452,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Studio TMLS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            452 =>
            array (
                'id' => 453,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Superga',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            453 =>
            array (
                'id' => 454,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Supertrash',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            454 =>
            array (
                'id' => 455,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Supra',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            455 =>
            array (
                'id' => 456,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Surface To Air',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            456 =>
            array (
                'id' => 457,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Swear',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            457 =>
            array (
                'id' => 458,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Swedish Hasbeens',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            458 =>
            array (
                'id' => 459,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sweet',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            459 =>
            array (
                'id' => 460,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sweet Lemon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            460 =>
            array (
                'id' => 461,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Swildens',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            461 =>
            array (
                'id' => 462,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'T.U.K.',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            462 =>
            array (
                'id' => 463,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tamaris',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            463 =>
            array (
                'id' => 464,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tapeet',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            464 =>
            array (
                'id' => 465,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tatoosh',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            465 =>
            array (
                'id' => 466,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'TBS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            466 =>
            array (
                'id' => 467,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'TBS Easy Walk',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            467 =>
            array (
                'id' => 468,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Terra Plana',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            468 =>
            array (
                'id' => 469,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Terry de Havilland',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            469 =>
            array (
                'id' => 470,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Teva',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            470 =>
            array (
                'id' => 471,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'The Cassette',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            471 =>
            array (
                'id' => 472,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'The North Face',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            472 =>
            array (
                'id' => 473,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tiggers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            473 =>
            array (
                'id' => 474,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tila March',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            474 =>
            array (
                'id' => 475,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Timberland',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            475 =>
            array (
                'id' => 476,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tom Tailor',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            476 =>
            array (
                'id' => 477,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Toms',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            477 =>
            array (
                'id' => 478,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tone-Ups',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            478 =>
            array (
                'id' => 479,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tormaline',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            479 =>
            array (
                'id' => 480,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tosca Blu Shoes',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            480 =>
            array (
                'id' => 481,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Trespass',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            481 =>
            array (
                'id' => 482,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'UGG',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            482 =>
            array (
                'id' => 483,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'UME Un matin d1-1été',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            483 =>
            array (
                'id' => 484,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Umo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            484 =>
            array (
                'id' => 485,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'UMO Confort',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            485 =>
            array (
                'id' => 486,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Un camino de rosas',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            486 =>
            array (
                'id' => 487,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Underground',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            487 =>
            array (
                'id' => 488,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Unisa',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            488 =>
            array (
                'id' => 489,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'United Nude',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            489 =>
            array (
                'id' => 490,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'US Marshall',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            490 =>
            array (
                'id' => 491,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Us polo assn',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            491 =>
            array (
                'id' => 492,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vagabond',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            492 =>
            array (
                'id' => 493,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Valensi',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            493 =>
            array (
                'id' => 494,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Van Dal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            494 =>
            array (
                'id' => 495,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vanessa Bruno',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            495 =>
            array (
                'id' => 496,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vanessa Bruno Athé',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            496 =>
            array (
                'id' => 497,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vans',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            497 =>
            array (
                'id' => 498,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Veja',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            498 =>
            array (
                'id' => 499,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vero Moda',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            499 =>
            array (
                'id' => 500,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Versace',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));
        DB::table('cg_brands')->insert(array (
            0 =>
            array (
                'id' => 501,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Versus',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            1 =>
            array (
                'id' => 502,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Via Roma 15',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            2 =>
            array (
                'id' => 503,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Via Uno',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            3 =>
            array (
                'id' => 504,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vibram FiveFingers',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            4 =>
            array (
                'id' => 505,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            5 =>
            array (
                'id' => 506,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vicini',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            6 =>
            array (
                'id' => 507,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Victoria',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            7 =>
            array (
                'id' => 508,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Visconti & Du Réau',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            8 =>
            array (
                'id' => 509,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vivien Lee',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            9 =>
            array (
                'id' => 510,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Volley',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            10 =>
            array (
                'id' => 511,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'What For',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            11 =>
            array (
                'id' => 512,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Xti',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            12 =>
            array (
                'id' => 513,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ylati',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            13 =>
            array (
                'id' => 514,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'YOSH x SWEAR',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            14 =>
            array (
                'id' => 515,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Yum Gum',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            15 =>
            array (
                'id' => 516,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Zespà',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            16 =>
            array (
                'id' => 517,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Zigi Soho',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            17 =>
            array (
                'id' => 518,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Zinda',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            18 =>
            array (
                'id' => 519,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Disney',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            19 =>
            array (
                'id' => 520,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gocco',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            20 =>
            array (
                'id' => 521,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nanos',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            21 =>
            array (
                'id' => 522,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Brums',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            22 =>
            array (
                'id' => 523,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Twins',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            23 =>
            array (
                'id' => 524,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Avent',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            24 =>
            array (
                'id' => 525,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nuk',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            25 =>
            array (
                'id' => 526,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Evenflo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            26 =>
            array (
                'id' => 527,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Summer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            27 =>
            array (
                'id' => 528,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Huggies',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            28 =>
            array (
                'id' => 529,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Graco',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            29 =>
            array (
                'id' => 530,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nestle',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            30 =>
            array (
                'id' => 531,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Chicco',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            31 =>
            array (
                'id' => 532,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => ' Nûby',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            32 =>
            array (
                'id' => 533,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Maclaren',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            33 =>
            array (
                'id' => 534,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Cybex',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            34 =>
            array (
                'id' => 535,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bebe',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            35 =>
            array (
                'id' => 536,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lego',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            36 =>
            array (
                'id' => 537,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ToysRus',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            37 =>
            array (
                'id' => 538,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Petit Praia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            38 =>
            array (
                'id' => 539,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Imaginarium',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            39 =>
            array (
                'id' => 540,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Prenatal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            40 =>
            array (
                'id' => 541,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mothercare',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            41 =>
            array (
                'id' => 542,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Skip Hop',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            42 =>
            array (
                'id' => 543,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Saro',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            43 =>
            array (
                'id' => 544,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bébé Confort ',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            44 =>
            array (
                'id' => 545,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Pasito a Pasito ',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            45 =>
            array (
                'id' => 546,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Haba',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            46 =>
            array (
                'id' => 547,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vertbaudet ',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            47 =>
            array (
                'id' => 548,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Tuc Tuc',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            48 =>
            array (
                'id' => 549,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Safety 1st',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            49 =>
            array (
                'id' => 550,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Swatch',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            50 =>
            array (
                'id' => 551,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Under Armour',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            51 =>
            array (
                'id' => 552,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'DoTerra',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            52 =>
            array (
                'id' => 553,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dye Paintball',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            53 =>
            array (
                'id' => 554,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Adidas Athletics',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            54 =>
            array (
                'id' => 555,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Asus',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            55 =>
            array (
                'id' => 556,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'D-Link',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            56 =>
            array (
                'id' => 557,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dell',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            57 =>
            array (
                'id' => 558,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Alienware',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            58 =>
            array (
                'id' => 559,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Apple',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            59 =>
            array (
                'id' => 560,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Logitech',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            60 =>
            array (
                'id' => 561,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Xbox',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            61 =>
            array (
                'id' => 562,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Playstation',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            62 =>
            array (
                'id' => 563,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'JBL',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            63 =>
            array (
                'id' => 564,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sony',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            64 =>
            array (
                'id' => 565,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'LG',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            65 =>
            array (
                'id' => 566,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Samsung',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            66 =>
            array (
                'id' => 567,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'HP',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            67 =>
            array (
                'id' => 568,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'TP-Link',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            68 =>
            array (
                'id' => 569,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bose',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            69 =>
            array (
                'id' => 570,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Beats',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            70 =>
            array (
                'id' => 571,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Razer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            71 =>
            array (
                'id' => 572,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Acer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            72 =>
            array (
                'id' => 573,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nokia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            73 =>
            array (
                'id' => 574,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Blu',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            74 =>
            array (
                'id' => 575,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Alcatel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            75 =>
            array (
                'id' => 576,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Huawei',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            76 =>
            array (
                'id' => 577,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'High Sierra',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            77 =>
            array (
                'id' => 578,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Spyder',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            78 =>
            array (
                'id' => 579,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Zippo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            79 =>
            array (
                'id' => 580,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Burton',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            80 =>
            array (
                'id' => 581,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Razor',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            81 =>
            array (
                'id' => 582,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Columbia',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            82 =>
            array (
                'id' => 583,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Allen Sports',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            83 =>
            array (
                'id' => 584,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mongoose',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            84 =>
            array (
                'id' => 585,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mountain House',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            85 =>
            array (
                'id' => 586,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ExOfficio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            86 =>
            array (
                'id' => 587,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Intex',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            87 =>
            array (
                'id' => 588,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Helly Hansen',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            88 =>
            array (
                'id' => 589,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Osprey',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            89 =>
            array (
                'id' => 590,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Victorinox',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            90 =>
            array (
                'id' => 591,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Coleman',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            91 =>
            array (
                'id' => 595,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Invicta',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            92 =>
            array (
                'id' => 596,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fossil',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            93 =>
            array (
                'id' => 597,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vince',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            94 =>
            array (
                'id' => 598,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Calvin Klein',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            95 =>
            array (
                'id' => 599,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lark&Ro',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            96 =>
            array (
                'id' => 600,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Stuart Weitzman',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            97 =>
            array (
                'id' => 601,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Alex and Ani',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            98 =>
            array (
                'id' => 602,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Theory',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            99 =>
            array (
                'id' => 603,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Milly',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            100 =>
            array (
                'id' => 604,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'BCBGmaxazria',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            101 =>
            array (
                'id' => 605,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hudson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            102 =>
            array (
                'id' => 606,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Parker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            103 =>
            array (
                'id' => 607,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Rachel Zoe',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            104 =>
            array (
                'id' => 608,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gibson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            105 =>
            array (
                'id' => 609,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Epiphone',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            106 =>
            array (
                'id' => 610,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Yamaha',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            107 =>
            array (
                'id' => 611,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fender',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            108 =>
            array (
                'id' => 612,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ibanez',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            109 =>
            array (
                'id' => 613,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Anker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            110 =>
            array (
                'id' => 614,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aolaifo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            111 =>
            array (
                'id' => 615,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Apie',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            112 =>
            array (
                'id' => 616,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Archeer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            113 =>
            array (
                'id' => 617,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aulker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            114 =>
            array (
                'id' => 618,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Axess',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            115 =>
            array (
                'id' => 619,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'AYL',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            116 =>
            array (
                'id' => 620,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'BLKbox',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            117 =>
            array (
                'id' => 621,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Cambridge Soundworks',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            118 =>
            array (
                'id' => 622,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Caseling',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            119 =>
            array (
                'id' => 623,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Celtic Blu',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            120 =>
            array (
                'id' => 624,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'EasyAcc',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            121 =>
            array (
                'id' => 625,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'eCandy',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            122 =>
            array (
                'id' => 626,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ElecStars',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            123 =>
            array (
                'id' => 627,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Essential for Play',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            124 =>
            array (
                'id' => 628,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Etekcity',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            125 =>
            array (
                'id' => 629,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Harman Kardon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            126 =>
            array (
                'id' => 630,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'HeroFiber',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            127 =>
            array (
                'id' => 631,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ifoxcreations',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            128 =>
            array (
                'id' => 632,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'iLive',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            129 =>
            array (
                'id' => 633,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Innoo Tech',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            130 =>
            array (
                'id' => 634,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ION Audio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            131 =>
            array (
                'id' => 635,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jabra',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            132 =>
            array (
                'id' => 636,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jam',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            133 =>
            array (
                'id' => 637,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Jawbone',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            134 =>
            array (
                'id' => 638,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'LESHP',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            135 =>
            array (
                'id' => 639,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mpow',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            136 =>
            array (
                'id' => 640,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Music Angel',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            137 =>
            array (
                'id' => 641,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Omaker',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            138 =>
            array (
                'id' => 642,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'parikaras',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            139 =>
            array (
                'id' => 643,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Photive',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            140 =>
            array (
                'id' => 644,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'PWR+',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            141 =>
            array (
                'id' => 645,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SHARKK',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            142 =>
            array (
                'id' => 646,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Soundbot',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            143 =>
            array (
                'id' => 647,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SoundPal',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            144 =>
            array (
                'id' => 648,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SoundSOUL',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            145 =>
            array (
                'id' => 649,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SUFUM',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            146 =>
            array (
                'id' => 650,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sylvania',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            147 =>
            array (
                'id' => 651,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'TaoTronics',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            148 =>
            array (
                'id' => 652,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ultimate Ears',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            149 =>
            array (
                'id' => 653,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'VAVA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            150 =>
            array (
                'id' => 654,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'VicTsing',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            151 =>
            array (
                'id' => 655,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Vtin',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            152 =>
            array (
                'id' => 656,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Willnorn',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            153 =>
            array (
                'id' => 657,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'XREXS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            154 =>
            array (
                'id' => 658,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Element',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            155 =>
            array (
                'id' => 659,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Avera',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            156 =>
            array (
                'id' => 660,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'AVIS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            157 =>
            array (
                'id' => 661,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Axess',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            158 =>
            array (
                'id' => 662,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Panasonic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            159 =>
            array (
                'id' => 663,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sharp',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            160 =>
            array (
                'id' => 664,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Westinghouse',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            161 =>
            array (
                'id' => 665,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'RCA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            162 =>
            array (
                'id' => 666,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'AKONA',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            163 =>
            array (
                'id' => 668,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'O`Neill',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            164 =>
            array (
                'id' => 669,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hyperflex',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            165 =>
            array (
                'id' => 670,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Dakine',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            166 =>
            array (
                'id' => 671,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Creatures of Leisure',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            167 =>
            array (
                'id' => 672,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'NeoSport',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            168 =>
            array (
                'id' => 673,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sticky Bumps',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            169 =>
            array (
                'id' => 674,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'ASICS',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            170 =>
            array (
                'id' => 675,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'BC Precision',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            171 =>
            array (
                'id' => 676,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bell',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            172 =>
            array (
                'id' => 677,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bones Bearings',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            173 =>
            array (
                'id' => 678,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Etnies',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            174 =>
            array (
                'id' => 679,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Everland',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            175 =>
            array (
                'id' => 680,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Globe',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            176 =>
            array (
                'id' => 681,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Heelys',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            177 =>
            array (
                'id' => 682,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Mob Grip',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            178 =>
            array (
                'id' => 683,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Osiris',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            179 =>
            array (
                'id' => 684,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Penny Skateboards',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            180 =>
            array (
                'id' => 685,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Quest',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            181 =>
            array (
                'id' => 686,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'RipStick',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            182 =>
            array (
                'id' => 687,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Thrasher',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            183 =>
            array (
                'id' => 688,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Triple Eight',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            184 =>
            array (
                'id' => 689,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hurley',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            185 =>
            array (
                'id' => 690,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'AmScope',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            186 =>
            array (
                'id' => 691,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Aurum Cables',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            187 =>
            array (
                'id' => 692,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bushnell',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            188 =>
            array (
                'id' => 693,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Canon',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            189 =>
            array (
                'id' => 694,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Case Logic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            190 =>
            array (
                'id' => 695,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Calestron',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            191 =>
            array (
                'id' => 696,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'eCostConnection',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            192 =>
            array (
                'id' => 697,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Energizer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            193 =>
            array (
                'id' => 698,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Fujifilm',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            194 =>
            array (
                'id' => 699,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Generic',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            195 =>
            array (
                'id' => 700,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'GoPro',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            196 =>
            array (
                'id' => 701,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Kingston',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            197 =>
            array (
                'id' => 702,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Lexar',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            198 =>
            array (
                'id' => 703,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'LimoStudio',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            199 =>
            array (
                'id' => 704,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Neewer',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            200 =>
            array (
                'id' => 705,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Polaroid',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            201 =>
            array (
                'id' => 706,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'SanDisk',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            202 =>
            array (
                'id' => 707,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Transcend',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            203 =>
            array (
                'id' => 708,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Activision',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            204 =>
            array (
                'id' => 709,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Bandai',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            205 =>
            array (
                'id' => 710,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Blizzard Entertainment',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            206 =>
            array (
                'id' => 711,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Electronic Arts',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            207 =>
            array (
                'id' => 712,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hasbro',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            208 =>
            array (
                'id' => 713,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hori',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            209 =>
            array (
                'id' => 714,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Hyperkin',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            210 =>
            array (
                'id' => 715,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Microsoft',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            211 =>
            array (
                'id' => 716,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nintendo',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            212 =>
            array (
                'id' => 717,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Nyko',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            213 =>
            array (
                'id' => 718,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'PDP',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            214 =>
            array (
                'id' => 719,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Riot Games',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            215 =>
            array (
                'id' => 720,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sades',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            216 =>
            array (
                'id' => 721,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Square Enix',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            217 =>
            array (
                'id' => 722,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ubisoft',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            218 =>
            array (
                'id' => 723,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Valve',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            219 =>
            array (
                'id' => 724,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Babolat',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            220 =>
            array (
                'id' => 725,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Gamma',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            221 =>
            array (
                'id' => 726,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Head',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            222 =>
            array (
                'id' => 727,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'K-Swiss',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            223 =>
            array (
                'id' => 728,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Penn',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            224 =>
            array (
                'id' => 729,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Wilson',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            225 =>
            array (
                'id' => 730,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Yonex',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            226 =>
            array (
                'id' => 731,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Ferrari',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
            227 =>
            array (
                'id' => 732,
                'enable' => 1,
                'image' => '/default-brands.png',
                'name' => 'Sony',
                'created_at' => '2019-01-01 12:00:00',
                'updated_at' => '2019-01-01 12:00:00',
            ),
        ));


    }
}
