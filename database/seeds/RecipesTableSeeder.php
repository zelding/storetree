<?php

use Illuminate\Database\Seeder;

class RecipesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('recipes')->delete();
        
        \DB::table('recipes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 243,
                'component_id' => 177,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 243,
                'component_id' => 157,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 157,
                'component_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 157,
                'component_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'item_id' => 83,
                'component_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'item_id' => 83,
                'component_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'item_id' => 83,
                'component_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'item_id' => 157,
                'component_id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'item_id' => 177,
                'component_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'item_id' => 177,
                'component_id' => 176,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'item_id' => 177,
                'component_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'item_id' => 126,
                'component_id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'item_id' => 126,
                'component_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'item_id' => 126,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'item_id' => 127,
                'component_id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'item_id' => 127,
                'component_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'item_id' => 128,
                'component_id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'item_id' => 128,
                'component_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'item_id' => 129,
                'component_id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 23,
                'item_id' => 129,
                'component_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 24,
                'item_id' => 130,
                'component_id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 25,
                'item_id' => 130,
                'component_id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 26,
                'item_id' => 89,
                'component_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 27,
                'item_id' => 89,
                'component_id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 28,
                'item_id' => 89,
                'component_id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 29,
                'item_id' => 214,
                'component_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'item_id' => 214,
                'component_id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 32,
                'item_id' => 214,
                'component_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 33,
                'item_id' => 214,
                'component_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 34,
                'item_id' => 215,
                'component_id' => 214,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 35,
                'item_id' => 215,
                'component_id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 36,
                'item_id' => 221,
                'component_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 37,
                'item_id' => 221,
                'component_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 38,
                'item_id' => 138,
                'component_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 39,
                'item_id' => 138,
                'component_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 40,
                'item_id' => 138,
                'component_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 41,
                'item_id' => 138,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 42,
                'item_id' => 116,
                'component_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 43,
                'item_id' => 116,
                'component_id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 45,
                'item_id' => 116,
                'component_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 46,
                'item_id' => 62,
                'component_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 47,
                'item_id' => 62,
                'component_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 48,
                'item_id' => 62,
                'component_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 49,
                'item_id' => 60,
                'component_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 50,
                'item_id' => 60,
                'component_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 51,
                'item_id' => 260,
                'component_id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 52,
                'item_id' => 260,
                'component_id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 53,
                'item_id' => 187,
                'component_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 54,
                'item_id' => 187,
                'component_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 55,
                'item_id' => 187,
                'component_id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 56,
                'item_id' => 187,
                'component_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 57,
                'item_id' => 75,
                'component_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 58,
                'item_id' => 75,
                'component_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 59,
                'item_id' => 75,
                'component_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 62,
                'item_id' => 110,
                'component_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 63,
                'item_id' => 110,
                'component_id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 64,
                'item_id' => 110,
                'component_id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 65,
                'item_id' => 183,
                'component_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 66,
                'item_id' => 183,
                'component_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 67,
                'item_id' => 183,
                'component_id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 68,
                'item_id' => 108,
                'component_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 69,
                'item_id' => 108,
                'component_id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 70,
                'item_id' => 108,
                'component_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 71,
                'item_id' => 79,
                'component_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 72,
                'item_id' => 79,
                'component_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 74,
                'item_id' => 79,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 75,
                'item_id' => 94,
                'component_id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 76,
                'item_id' => 135,
                'component_id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 77,
                'item_id' => 135,
                'component_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 78,
                'item_id' => 134,
                'component_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 79,
                'item_id' => 134,
                'component_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 80,
                'item_id' => 134,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 81,
                'item_id' => 136,
                'component_id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 82,
                'item_id' => 136,
                'component_id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 83,
                'item_id' => 235,
                'component_id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 84,
                'item_id' => 235,
                'component_id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 85,
                'item_id' => 235,
                'component_id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 86,
                'item_id' => 235,
                'component_id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 87,
                'item_id' => 175,
                'component_id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 89,
                'item_id' => 175,
                'component_id' => 174,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 90,
                'item_id' => 18,
                'component_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 91,
                'item_id' => 18,
                'component_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 92,
                'item_id' => 42,
                'component_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 93,
                'item_id' => 42,
                'component_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 94,
                'item_id' => 42,
                'component_id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 95,
                'item_id' => 42,
                'component_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 96,
                'item_id' => 42,
                'component_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 97,
                'item_id' => 52,
                'component_id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 98,
                'item_id' => 52,
                'component_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 99,
                'item_id' => 52,
                'component_id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 100,
                'item_id' => 77,
                'component_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 101,
                'item_id' => 77,
                'component_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 102,
                'item_id' => 81,
                'component_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 103,
                'item_id' => 81,
                'component_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 104,
                'item_id' => 85,
                'component_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 105,
                'item_id' => 85,
                'component_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 106,
                'item_id' => 85,
                'component_id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 107,
                'item_id' => 87,
                'component_id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 108,
                'item_id' => 87,
                'component_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 109,
                'item_id' => 87,
                'component_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 110,
                'item_id' => 91,
                'component_id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 111,
                'item_id' => 91,
                'component_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 112,
                'item_id' => 91,
                'component_id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 113,
                'item_id' => 96,
                'component_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 114,
                'item_id' => 96,
                'component_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 115,
                'item_id' => 96,
                'component_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 116,
                'item_id' => 104,
                'component_id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 117,
                'item_id' => 104,
                'component_id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 118,
                'item_id' => 104,
                'component_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 119,
                'item_id' => 100,
                'component_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 120,
                'item_id' => 100,
                'component_id' => 165,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 121,
                'item_id' => 100,
                'component_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 122,
                'item_id' => 165,
                'component_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 123,
                'item_id' => 165,
                'component_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 124,
                'item_id' => 165,
                'component_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 125,
                'item_id' => 93,
                'component_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 126,
                'item_id' => 93,
                'component_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 127,
                'item_id' => 93,
                'component_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 128,
                'item_id' => 98,
                'component_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 129,
                'item_id' => 98,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 130,
                'item_id' => 102,
                'component_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 131,
                'item_id' => 102,
                'component_id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 132,
                'item_id' => 102,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 133,
                'item_id' => 102,
                'component_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 134,
                'item_id' => 106,
                'component_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 135,
                'item_id' => 106,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 136,
                'item_id' => 106,
                'component_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 137,
                'item_id' => 112,
                'component_id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 138,
                'item_id' => 112,
                'component_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 139,
                'item_id' => 114,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 140,
                'item_id' => 114,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 141,
                'item_id' => 114,
                'component_id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 142,
                'item_id' => 114,
                'component_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 143,
                'item_id' => 118,
                'component_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 144,
                'item_id' => 118,
                'component_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 145,
                'item_id' => 118,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 146,
                'item_id' => 120,
                'component_id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 147,
                'item_id' => 120,
                'component_id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 148,
                'item_id' => 120,
                'component_id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 149,
                'item_id' => 185,
                'component_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 150,
                'item_id' => 185,
                'component_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 151,
                'item_id' => 185,
                'component_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 152,
                'item_id' => 140,
                'component_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 153,
                'item_id' => 140,
                'component_id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 154,
                'item_id' => 140,
                'component_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 155,
                'item_id' => 142,
                'component_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 156,
                'item_id' => 142,
                'component_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 157,
                'item_id' => 142,
                'component_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 158,
                'item_id' => 142,
                'component_id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 159,
                'item_id' => 144,
                'component_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 160,
                'item_id' => 144,
                'component_id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 161,
                'item_id' => 144,
                'component_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 162,
                'item_id' => 146,
                'component_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 163,
                'item_id' => 146,
                'component_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 164,
                'item_id' => 146,
                'component_id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 165,
                'item_id' => 149,
                'component_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 166,
                'item_id' => 149,
                'component_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 167,
                'item_id' => 149,
                'component_id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 169,
                'item_id' => 151,
                'component_id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 170,
                'item_id' => 151,
                'component_id' => 219,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 171,
                'item_id' => 151,
                'component_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 172,
                'item_id' => 153,
                'component_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 173,
                'item_id' => 153,
                'component_id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 174,
                'item_id' => 153,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 175,
                'item_id' => 155,
                'component_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 176,
                'item_id' => 155,
                'component_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 177,
                'item_id' => 155,
                'component_id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 178,
                'item_id' => 159,
                'component_id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 179,
                'item_id' => 159,
                'component_id' => 158,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 180,
                'item_id' => 159,
                'component_id' => 157,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 181,
                'item_id' => 161,
                'component_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 182,
                'item_id' => 161,
                'component_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 183,
                'item_id' => 161,
                'component_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 184,
                'item_id' => 163,
                'component_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 185,
                'item_id' => 163,
                'component_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 186,
                'item_id' => 163,
                'component_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 187,
                'item_id' => 167,
                'component_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 188,
                'item_id' => 167,
                'component_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 189,
                'item_id' => 169,
                'component_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 190,
                'item_id' => 169,
                'component_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 191,
                'item_id' => 169,
                'component_id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 192,
                'item_id' => 171,
                'component_id' => 170,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 193,
                'item_id' => 171,
                'component_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 194,
                'item_id' => 173,
                'component_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 195,
                'item_id' => 173,
                'component_id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 196,
                'item_id' => 173,
                'component_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 197,
                'item_id' => 179,
                'component_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 198,
                'item_id' => 179,
                'component_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 199,
                'item_id' => 179,
                'component_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 200,
                'item_id' => 179,
                'component_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 201,
                'item_id' => 193,
                'component_id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 202,
                'item_id' => 193,
                'component_id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 203,
                'item_id' => 201,
                'component_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 204,
                'item_id' => 201,
                'component_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 205,
                'item_id' => 201,
                'component_id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 206,
                'item_id' => 209,
                'component_id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 207,
                'item_id' => 209,
                'component_id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 208,
                'item_id' => 209,
                'component_id' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 209,
                'item_id' => 195,
                'component_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 210,
                'item_id' => 195,
                'component_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 211,
                'item_id' => 195,
                'component_id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 212,
                'item_id' => 197,
                'component_id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 213,
                'item_id' => 197,
                'component_id' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 214,
                'item_id' => 197,
                'component_id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 215,
                'item_id' => 205,
                'component_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 216,
                'item_id' => 205,
                'component_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 217,
                'item_id' => 205,
                'component_id' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 218,
                'item_id' => 199,
                'component_id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 219,
                'item_id' => 199,
                'component_id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 220,
                'item_id' => 199,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 221,
                'item_id' => 199,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 222,
                'item_id' => 191,
                'component_id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 223,
                'item_id' => 191,
                'component_id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 224,
                'item_id' => 191,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 225,
                'item_id' => 189,
                'component_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 226,
                'item_id' => 189,
                'component_id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 227,
                'item_id' => 181,
                'component_id' => 180,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 228,
                'item_id' => 181,
                'component_id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 229,
                'item_id' => 181,
                'component_id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 230,
                'item_id' => 203,
                'component_id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 231,
                'item_id' => 203,
                'component_id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 232,
                'item_id' => 203,
                'component_id' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 233,
                'item_id' => 207,
                'component_id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 234,
                'item_id' => 207,
                'component_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 235,
                'item_id' => 207,
                'component_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 236,
                'item_id' => 211,
                'component_id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 237,
                'item_id' => 211,
                'component_id' => 210,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 238,
                'item_id' => 217,
                'component_id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 239,
                'item_id' => 217,
                'component_id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 240,
                'item_id' => 219,
                'component_id' => 218,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 241,
                'item_id' => 219,
                'component_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 242,
                'item_id' => 219,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 243,
                'item_id' => 223,
                'component_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 244,
                'item_id' => 223,
                'component_id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 245,
                'item_id' => 227,
                'component_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 246,
                'item_id' => 227,
                'component_id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 247,
                'item_id' => 227,
                'component_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 248,
                'item_id' => 227,
                'component_id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 249,
                'item_id' => 229,
                'component_id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 250,
                'item_id' => 229,
                'component_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 252,
                'item_id' => 229,
                'component_id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 253,
                'item_id' => 231,
                'component_id' => 229,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 254,
                'item_id' => 231,
                'component_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 255,
                'item_id' => 237,
                'component_id' => 221,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 256,
                'item_id' => 237,
                'component_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 257,
                'item_id' => 237,
                'component_id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 258,
                'item_id' => 239,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 259,
                'item_id' => 239,
                'component_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 260,
                'item_id' => 239,
                'component_id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 261,
                'item_id' => 241,
                'component_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 262,
                'item_id' => 241,
                'component_id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 263,
                'item_id' => 241,
                'component_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 264,
                'item_id' => 245,
                'component_id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 265,
                'item_id' => 245,
                'component_id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 267,
                'item_id' => 247,
                'component_id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 268,
                'item_id' => 247,
                'component_id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 269,
                'item_id' => 249,
                'component_id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 270,
                'item_id' => 249,
                'component_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 271,
                'item_id' => 249,
                'component_id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 272,
                'item_id' => 252,
                'component_id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 273,
                'item_id' => 252,
                'component_id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 274,
                'item_id' => 261,
                'component_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 276,
                'item_id' => 261,
                'component_id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 277,
                'item_id' => 263,
                'component_id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 278,
                'item_id' => 263,
                'component_id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 279,
                'item_id' => 261,
                'component_id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 280,
                'item_id' => 175,
                'component_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 281,
                'item_id' => 264,
                'component_id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 282,
                'item_id' => 264,
                'component_id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}