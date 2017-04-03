<?php

use Illuminate\Database\Seeder;

class ItemStatTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_stat')->delete();
        
        \DB::table('item_stat')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 243,
                'stat_id' => 1,
                'value' => '[250, 350, 500, 700, 1000]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 243,
                'stat_id' => 2,
                'value' => '[15,20,25,30,35]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 243,
                'stat_id' => 3,
                'value' => '[70,75,80,85,90]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 243,
                'stat_id' => 4,
                'value' => '[50]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 243,
                'stat_id' => 5,
                'value' => '[35,40,45,50,55]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 243,
                'stat_id' => 6,
                'value' => '[25]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 243,
                'stat_id' => 7,
                'value' => '[10]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 243,
                'stat_id' => 8,
                'value' => '[1.4]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 243,
                'stat_id' => 9,
                'value' => '[85,100,140,200,275]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 243,
                'stat_id' => 10,
                'value' => '[2.3]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 243,
                'stat_id' => 11,
                'value' => '[2]',
                'created_at' => '2017-02-24 12:20:00',
                'updated_at' => '2017-02-24 12:20:00',
            ),
            11 => 
            array (
                'id' => 14,
                'item_id' => 243,
                'stat_id' => 12,
                'value' => '[10,20,30,40,50]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'item_id' => 187,
                'stat_id' => 13,
                'value' => '["9","15","20"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'item_id' => 187,
                'stat_id' => 14,
                'value' => '["25","28","32"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'item_id' => 187,
                'stat_id' => 15,
                'value' => '["5","6","7"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'item_id' => 187,
                'stat_id' => 2,
                'value' => '["7","9","11"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'item_id' => 187,
                'stat_id' => 16,
                'value' => '["31","40","55"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'item_id' => 187,
                'stat_id' => 17,
                'value' => '["0"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'item_id' => 187,
                'stat_id' => 18,
                'value' => '["25","30","35"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'item_id' => 187,
                'stat_id' => 19,
                'value' => '["4","5","6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'item_id' => 187,
                'stat_id' => 20,
                'value' => '["5","6","7"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'item_id' => 187,
                'stat_id' => 21,
                'value' => '["45","54","63"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'item_id' => 187,
                'stat_id' => 22,
                'value' => '["0,036f"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'item_id' => 261,
                'stat_id' => 4,
                'value' => '["20","25","30"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'item_id' => 261,
                'stat_id' => 3,
                'value' => '["20","30","40"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 29,
                'item_id' => 173,
                'stat_id' => 28,
                'value' => '["35"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 30,
                'item_id' => 173,
                'stat_id' => 13,
                'value' => '["30","40","53","65","75"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 31,
                'item_id' => 173,
                'stat_id' => 30,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 32,
                'item_id' => 173,
                'stat_id' => 29,
                'value' => '["35","39","42","45","48"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 35,
                'item_id' => 173,
                'stat_id' => 14,
                'value' => '["30","33","36","39","42"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 37,
                'item_id' => 67,
                'stat_id' => 14,
                'value' => '["+55"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 38,
                'item_id' => 18,
                'stat_id' => 14,
                'value' => '["+120"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 39,
                'item_id' => 2,
                'stat_id' => 13,
                'value' => '["+9"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 40,
                'item_id' => 31,
                'stat_id' => 14,
                'value' => '["15"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 41,
                'item_id' => 6,
                'stat_id' => 15,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 42,
                'item_id' => 6,
                'stat_id' => 2,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 43,
                'item_id' => 62,
                'stat_id' => 13,
                'value' => '["24"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 44,
                'item_id' => 23,
                'stat_id' => 12,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 45,
                'item_id' => 24,
                'stat_id' => 27,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 46,
                'item_id' => 25,
                'stat_id' => 31,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 47,
                'item_id' => 35,
                'stat_id' => 32,
                'value' => '["45"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 48,
                'item_id' => 62,
                'stat_id' => 32,
                'value' => '["45"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 49,
                'item_id' => 60,
                'stat_id' => 32,
                'value' => '["100"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 62,
                'item_id' => 26,
                'stat_id' => 12,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 63,
                'item_id' => 26,
                'stat_id' => 31,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 64,
                'item_id' => 26,
                'stat_id' => 27,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 65,
                'item_id' => 21,
                'stat_id' => 31,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 66,
                'item_id' => 89,
                'stat_id' => 27,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 67,
                'item_id' => 89,
                'stat_id' => 12,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 68,
                'item_id' => 89,
                'stat_id' => 31,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 69,
                'item_id' => 89,
                'stat_id' => 13,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 70,
                'item_id' => 235,
                'stat_id' => 12,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 71,
                'item_id' => 235,
                'stat_id' => 27,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 72,
                'item_id' => 235,
                'stat_id' => 31,
                'value' => '["12"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 73,
                'item_id' => 235,
                'stat_id' => 2,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 74,
                'item_id' => 235,
                'stat_id' => 13,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 75,
                'item_id' => 235,
                'stat_id' => 15,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 77,
                'item_id' => 126,
                'stat_id' => 27,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 78,
                'item_id' => 126,
                'stat_id' => 12,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 80,
                'item_id' => 126,
                'stat_id' => 13,
                'value' => '["9"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 81,
                'item_id' => 14,
                'stat_id' => 32,
                'value' => '["20"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 82,
                'item_id' => 114,
                'stat_id' => 32,
                'value' => '["40"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 83,
                'item_id' => 69,
                'stat_id' => 39,
                'value' => '["100"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 85,
                'item_id' => 29,
                'stat_id' => 31,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 86,
                'item_id' => 34,
                'stat_id' => 39,
                'value' => '["50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 87,
                'item_id' => 114,
                'stat_id' => 31,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 88,
                'item_id' => 114,
                'stat_id' => 39,
                'value' => '["150"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 89,
                'item_id' => 28,
                'stat_id' => 27,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 90,
                'item_id' => 27,
                'stat_id' => 12,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 91,
                'item_id' => 72,
                'stat_id' => 1,
                'value' => '["175"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 92,
                'item_id' => 72,
                'stat_id' => 23,
                'value' => '["175"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 93,
                'item_id' => 138,
                'stat_id' => 27,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 94,
                'item_id' => 138,
                'stat_id' => 12,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 95,
                'item_id' => 138,
                'stat_id' => 31,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 96,
                'item_id' => 138,
                'stat_id' => 1,
                'value' => '["175"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 97,
                'item_id' => 138,
                'stat_id' => 23,
                'value' => '["175"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 98,
                'item_id' => 30,
                'stat_id' => 12,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 99,
                'item_id' => 30,
                'stat_id' => 27,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 100,
                'item_id' => 30,
                'stat_id' => 31,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 101,
                'item_id' => 199,
                'stat_id' => 1,
                'value' => '["225"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 102,
                'item_id' => 199,
                'stat_id' => 23,
                'value' => '["250"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 103,
                'item_id' => 199,
                'stat_id' => 27,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 104,
                'item_id' => 199,
                'stat_id' => 31,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 105,
                'item_id' => 199,
                'stat_id' => 12,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 106,
                'item_id' => 3,
                'stat_id' => 13,
                'value' => '["12"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 108,
                'item_id' => 4,
                'stat_id' => 15,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 109,
                'item_id' => 5,
                'stat_id' => 13,
                'value' => '["14"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 111,
                'item_id' => 7,
                'stat_id' => 13,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 112,
                'item_id' => 7,
                'stat_id' => 9,
                'value' => '["85"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 113,
                'item_id' => 7,
                'stat_id' => 8,
                'value' => '["0"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 114,
                'item_id' => 7,
                'stat_id' => 6,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 115,
                'item_id' => 7,
                'stat_id' => 7,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 117,
                'item_id' => 7,
                'stat_id' => 10,
                'value' => '["0"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 118,
                'item_id' => 177,
                'stat_id' => 12,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 119,
                'item_id' => 177,
                'stat_id' => 13,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 120,
                'item_id' => 177,
                'stat_id' => 6,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 121,
                'item_id' => 177,
                'stat_id' => 7,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 122,
                'item_id' => 177,
                'stat_id' => 9,
                'value' => '["85"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 124,
                'item_id' => 177,
                'stat_id' => 10,
                'value' => '["2.3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 125,
                'item_id' => 177,
                'stat_id' => 8,
                'value' => '["1.4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 126,
                'item_id' => 169,
                'stat_id' => 13,
                'value' => '["66"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 127,
                'item_id' => 169,
                'stat_id' => 6,
                'value' => '["35"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 128,
                'item_id' => 169,
                'stat_id' => 7,
                'value' => '["35"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 130,
                'item_id' => 169,
                'stat_id' => 9,
                'value' => '["160"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 131,
                'item_id' => 169,
                'stat_id' => 10,
                'value' => '["0"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 132,
                'item_id' => 169,
                'stat_id' => 8,
                'value' => '["0.01"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 135,
                'item_id' => 71,
                'stat_id' => 23,
                'value' => '["150"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 136,
                'item_id' => 221,
                'stat_id' => 23,
                'value' => '["200"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 137,
                'item_id' => 221,
                'stat_id' => 32,
                'value' => '["50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 138,
                'item_id' => 96,
                'stat_id' => 15,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 139,
                'item_id' => 22,
                'stat_id' => 12,
                'value' => '["1"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 140,
                'item_id' => 22,
                'stat_id' => 27,
                'value' => '["1"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 141,
                'item_id' => 22,
                'stat_id' => 31,
                'value' => '["1"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 142,
                'item_id' => 96,
                'stat_id' => 12,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 143,
                'item_id' => 96,
                'stat_id' => 31,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 144,
                'item_id' => 96,
                'stat_id' => 27,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 145,
                'item_id' => 104,
                'stat_id' => 12,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 146,
                'item_id' => 104,
                'stat_id' => 31,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 147,
                'item_id' => 104,
                'stat_id' => 27,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 148,
                'item_id' => 33,
                'stat_id' => 2,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 149,
                'item_id' => 104,
                'stat_id' => 2,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 150,
                'item_id' => 75,
                'stat_id' => 32,
                'value' => '["45"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 151,
                'item_id' => 75,
                'stat_id' => 14,
                'value' => '["25"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 152,
                'item_id' => 75,
                'stat_id' => 33,
                'value' => '["9"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 153,
                'item_id' => 270,
                'stat_id' => 14,
                'value' => '["30","35","40","45","50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 154,
                'item_id' => 270,
                'stat_id' => 32,
                'value' => '["50","55","60","65","70"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 155,
                'item_id' => 270,
                'stat_id' => 33,
                'value' => '["15","24","36","54","72"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 157,
                'item_id' => 270,
                'stat_id' => 34,
                'value' => '["300"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 158,
                'item_id' => 270,
                'stat_id' => 35,
                'value' => '["30"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 160,
                'item_id' => 126,
                'stat_id' => 31,
                'value' => '["13","16","19","22","25","28","31","34","37"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 161,
                'item_id' => 42,
                'stat_id' => 27,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 162,
                'item_id' => 42,
                'stat_id' => 31,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 163,
                'item_id' => 42,
                'stat_id' => 12,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 165,
                'item_id' => 8,
                'stat_id' => 13,
                'value' => '["24"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 166,
                'item_id' => 146,
                'stat_id' => 12,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 167,
                'item_id' => 146,
                'stat_id' => 13,
                'value' => '["24"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 168,
                'item_id' => 290,
                'stat_id' => 13,
                'value' => '["24"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 169,
                'item_id' => 290,
                'stat_id' => 12,
                'value' => '["14"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 170,
                'item_id' => 290,
                'stat_id' => 27,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 171,
                'item_id' => 290,
                'stat_id' => 31,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 172,
                'item_id' => 42,
                'stat_id' => 40,
                'value' => '["17"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 173,
                'item_id' => 42,
                'stat_id' => 41,
                'value' => '["1200"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 174,
                'item_id' => 42,
                'stat_id' => 42,
                'value' => '["15"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 175,
                'item_id' => 290,
                'stat_id' => 41,
                'value' => '["1200"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 176,
                'item_id' => 290,
                'stat_id' => 40,
                'value' => '["17"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 177,
                'item_id' => 290,
                'stat_id' => 42,
                'value' => '["15"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 178,
                'item_id' => 290,
                'stat_id' => 43,
                'value' => '["20"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 179,
                'item_id' => 290,
                'stat_id' => 30,
                'value' => '["0.1"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 180,
                'item_id' => 290,
                'stat_id' => 44,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 181,
                'item_id' => 40,
                'stat_id' => 40,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 182,
                'item_id' => 40,
                'stat_id' => 42,
                'value' => '["15"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 183,
                'item_id' => 40,
                'stat_id' => 41,
                'value' => '["1200"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 184,
                'item_id' => 292,
                'stat_id' => 32,
                'value' => '["60","66","73","80","88"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 185,
                'item_id' => 292,
                'stat_id' => 23,
                'value' => '["350","420","500","600","700"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 186,
                'item_id' => 292,
                'stat_id' => 12,
                'value' => '["10","15","20","25","30"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 187,
                'item_id' => 292,
                'stat_id' => 31,
                'value' => '["10","15","20","25","30"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 188,
                'item_id' => 292,
                'stat_id' => 27,
                'value' => '["10","15","20","25","30"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 189,
                'item_id' => 292,
                'stat_id' => 15,
                'value' => '["7","10","12","15","18"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 190,
                'item_id' => 292,
                'stat_id' => 45,
                'value' => '["6","9","12","15","18"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 191,
                'item_id' => 292,
                'stat_id' => 46,
                'value' => '["20","25","30","35","40"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 192,
                'item_id' => 292,
                'stat_id' => 52,
                'value' => '["3","4","5","6","7"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 193,
                'item_id' => 292,
                'stat_id' => 53,
                'value' => '["17","20","23","26","29"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 194,
                'item_id' => 292,
                'stat_id' => 47,
                'value' => '["20"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 195,
                'item_id' => 292,
                'stat_id' => 48,
                'value' => '["900"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 196,
                'item_id' => 292,
                'stat_id' => 49,
                'value' => '["350","450","550","650","750"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 197,
                'item_id' => 292,
                'stat_id' => 50,
                'value' => '["200","250","325","400","475"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 198,
                'item_id' => 292,
                'stat_id' => 54,
                'value' => '["100","150","225","340","450"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 199,
                'item_id' => 292,
                'stat_id' => 51,
                'value' => '["25","40","60","85","110"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 200,
                'item_id' => 20,
                'stat_id' => 27,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 204,
                'item_id' => 16,
                'stat_id' => 3,
                'value' => '["16"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 205,
                'item_id' => 16,
                'stat_id' => 5,
                'value' => '["8"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 206,
                'item_id' => 16,
                'stat_id' => 4,
                'value' => '["50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 207,
                'item_id' => 83,
                'stat_id' => 27,
                'value' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 208,
                'item_id' => 83,
                'stat_id' => 4,
                'value' => '["50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 209,
                'item_id' => 83,
                'stat_id' => 3,
                'value' => '["20"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 210,
                'item_id' => 83,
                'stat_id' => 5,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 211,
                'item_id' => 83,
                'stat_id' => 55,
                'value' => '["100"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 212,
                'item_id' => 302,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 213,
                'item_id' => 304,
                'stat_id' => 30,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 214,
                'item_id' => 306,
                'stat_id' => 30,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 215,
                'item_id' => 308,
                'stat_id' => 30,
                'value' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 216,
                'item_id' => 310,
                'stat_id' => 30,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 218,
                'item_id' => 312,
                'stat_id' => 30,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 219,
                'item_id' => 314,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 220,
                'item_id' => 316,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 221,
                'item_id' => 319,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 222,
                'item_id' => 321,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 223,
                'item_id' => 323,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 224,
                'item_id' => 325,
                'stat_id' => 30,
                'value' => '["0.5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 225,
                'item_id' => 334,
                'stat_id' => 30,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 226,
                'item_id' => 338,
                'stat_id' => 30,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 227,
                'item_id' => 343,
                'stat_id' => 30,
                'value' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 228,
                'item_id' => 173,
                'stat_id' => 27,
                'value' => '["30","35","40","45","50"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 229,
                'item_id' => 9,
                'stat_id' => 15,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 230,
                'item_id' => 10,
                'stat_id' => 13,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 231,
                'item_id' => 10,
                'stat_id' => 14,
                'value' => '["10"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 232,
                'item_id' => 15,
                'stat_id' => 15,
                'value' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 233,
                'item_id' => 19,
                'stat_id' => 12,
                'value' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 234,
                'item_id' => 32,
                'stat_id' => 13,
                'value' => '["15"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}