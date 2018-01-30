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

        \DB::table('item_stat')->insert(
            [
                0   =>
                    [
                        'id'         => 1,
                        'item_id'    => 243,
                        'stat_id'    => 1,
                        'value'      => '[250, 350, 500, 700, 1000]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                1   =>
                    [
                        'id'         => 2,
                        'item_id'    => 243,
                        'stat_id'    => 2,
                        'value'      => '[15,20,25,30,35]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                2   =>
                    [
                        'id'         => 3,
                        'item_id'    => 243,
                        'stat_id'    => 3,
                        'value'      => '[70,75,80,85,90]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                3   =>
                    [
                        'id'         => 4,
                        'item_id'    => 243,
                        'stat_id'    => 4,
                        'value'      => '[50]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                4   =>
                    [
                        'id'         => 5,
                        'item_id'    => 243,
                        'stat_id'    => 5,
                        'value'      => '[35,40,45,50,55]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                5   =>
                    [
                        'id'         => 6,
                        'item_id'    => 243,
                        'stat_id'    => 6,
                        'value'      => '[25]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                6   =>
                    [
                        'id'         => 7,
                        'item_id'    => 243,
                        'stat_id'    => 7,
                        'value'      => '[10]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                7   =>
                    [
                        'id'         => 8,
                        'item_id'    => 243,
                        'stat_id'    => 8,
                        'value'      => '[1.4]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                8   =>
                    [
                        'id'         => 9,
                        'item_id'    => 243,
                        'stat_id'    => 9,
                        'value'      => '[85,100,140,200,275]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                9   =>
                    [
                        'id'         => 10,
                        'item_id'    => 243,
                        'stat_id'    => 10,
                        'value'      => '[2.3]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                10  =>
                    [
                        'id'         => 11,
                        'item_id'    => 243,
                        'stat_id'    => 11,
                        'value'      => '[2]',
                        'created_at' => '2017-02-24 12:20:00',
                        'updated_at' => '2017-02-24 12:20:00',
                    ],
                11  =>
                    [
                        'id'         => 14,
                        'item_id'    => 243,
                        'stat_id'    => 12,
                        'value'      => '[10,20,30,40,50]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                12  =>
                    [
                        'id'         => 15,
                        'item_id'    => 187,
                        'stat_id'    => 13,
                        'value'      => '["9","15","20"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                13  =>
                    [
                        'id'         => 16,
                        'item_id'    => 187,
                        'stat_id'    => 14,
                        'value'      => '["25","28","32"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                14  =>
                    [
                        'id'         => 17,
                        'item_id'    => 187,
                        'stat_id'    => 15,
                        'value'      => '["5","6","7"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                15  =>
                    [
                        'id'         => 18,
                        'item_id'    => 187,
                        'stat_id'    => 2,
                        'value'      => '["7","9","11"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                16  =>
                    [
                        'id'         => 19,
                        'item_id'    => 187,
                        'stat_id'    => 16,
                        'value'      => '["31","40","55"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                17  =>
                    [
                        'id'         => 20,
                        'item_id'    => 187,
                        'stat_id'    => 17,
                        'value'      => '["0"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                18  =>
                    [
                        'id'         => 21,
                        'item_id'    => 187,
                        'stat_id'    => 18,
                        'value'      => '["25","30","35"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                19  =>
                    [
                        'id'         => 22,
                        'item_id'    => 187,
                        'stat_id'    => 19,
                        'value'      => '["4","5","6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                20  =>
                    [
                        'id'         => 23,
                        'item_id'    => 187,
                        'stat_id'    => 20,
                        'value'      => '["5","6","7"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                21  =>
                    [
                        'id'         => 24,
                        'item_id'    => 187,
                        'stat_id'    => 21,
                        'value'      => '["45","54","63"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                22  =>
                    [
                        'id'         => 25,
                        'item_id'    => 187,
                        'stat_id'    => 22,
                        'value'      => '["0,036f"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                23  =>
                    [
                        'id'         => 26,
                        'item_id'    => 261,
                        'stat_id'    => 4,
                        'value'      => '["20","25","30"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                24  =>
                    [
                        'id'         => 27,
                        'item_id'    => 261,
                        'stat_id'    => 3,
                        'value'      => '["20","30","40"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                25  =>
                    [
                        'id'         => 29,
                        'item_id'    => 173,
                        'stat_id'    => 28,
                        'value'      => '["35"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                26  =>
                    [
                        'id'         => 30,
                        'item_id'    => 173,
                        'stat_id'    => 13,
                        'value'      => '["30","40","53","65","75"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                27  =>
                    [
                        'id'         => 31,
                        'item_id'    => 173,
                        'stat_id'    => 30,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                28  =>
                    [
                        'id'         => 32,
                        'item_id'    => 173,
                        'stat_id'    => 29,
                        'value'      => '["35","39","42","45","48"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                29  =>
                    [
                        'id'         => 35,
                        'item_id'    => 173,
                        'stat_id'    => 14,
                        'value'      => '["30","33","36","39","42"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                30  =>
                    [
                        'id'         => 37,
                        'item_id'    => 67,
                        'stat_id'    => 14,
                        'value'      => '["+55"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                31  =>
                    [
                        'id'         => 38,
                        'item_id'    => 18,
                        'stat_id'    => 14,
                        'value'      => '["+120"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                32  =>
                    [
                        'id'         => 39,
                        'item_id'    => 2,
                        'stat_id'    => 13,
                        'value'      => '["+9"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                33  =>
                    [
                        'id'         => 40,
                        'item_id'    => 31,
                        'stat_id'    => 14,
                        'value'      => '["15"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                34  =>
                    [
                        'id'         => 41,
                        'item_id'    => 6,
                        'stat_id'    => 15,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                35  =>
                    [
                        'id'         => 42,
                        'item_id'    => 6,
                        'stat_id'    => 2,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                36  =>
                    [
                        'id'         => 43,
                        'item_id'    => 62,
                        'stat_id'    => 13,
                        'value'      => '["24"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                37  =>
                    [
                        'id'         => 44,
                        'item_id'    => 23,
                        'stat_id'    => 12,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                38  =>
                    [
                        'id'         => 45,
                        'item_id'    => 24,
                        'stat_id'    => 27,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                39  =>
                    [
                        'id'         => 46,
                        'item_id'    => 25,
                        'stat_id'    => 31,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                40  =>
                    [
                        'id'         => 47,
                        'item_id'    => 35,
                        'stat_id'    => 32,
                        'value'      => '["45"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                41  =>
                    [
                        'id'         => 48,
                        'item_id'    => 62,
                        'stat_id'    => 32,
                        'value'      => '["45"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                42  =>
                    [
                        'id'         => 49,
                        'item_id'    => 60,
                        'stat_id'    => 32,
                        'value'      => '["100"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                43  =>
                    [
                        'id'         => 62,
                        'item_id'    => 26,
                        'stat_id'    => 12,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                44  =>
                    [
                        'id'         => 63,
                        'item_id'    => 26,
                        'stat_id'    => 31,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                45  =>
                    [
                        'id'         => 64,
                        'item_id'    => 26,
                        'stat_id'    => 27,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                46  =>
                    [
                        'id'         => 65,
                        'item_id'    => 21,
                        'stat_id'    => 31,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                47  =>
                    [
                        'id'         => 66,
                        'item_id'    => 89,
                        'stat_id'    => 27,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                48  =>
                    [
                        'id'         => 67,
                        'item_id'    => 89,
                        'stat_id'    => 12,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                49  =>
                    [
                        'id'         => 68,
                        'item_id'    => 89,
                        'stat_id'    => 31,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                50  =>
                    [
                        'id'         => 69,
                        'item_id'    => 89,
                        'stat_id'    => 13,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                51  =>
                    [
                        'id'         => 70,
                        'item_id'    => 235,
                        'stat_id'    => 12,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                52  =>
                    [
                        'id'         => 71,
                        'item_id'    => 235,
                        'stat_id'    => 27,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                53  =>
                    [
                        'id'         => 72,
                        'item_id'    => 235,
                        'stat_id'    => 31,
                        'value'      => '["12"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                54  =>
                    [
                        'id'         => 73,
                        'item_id'    => 235,
                        'stat_id'    => 2,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                55  =>
                    [
                        'id'         => 74,
                        'item_id'    => 235,
                        'stat_id'    => 13,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                56  =>
                    [
                        'id'         => 75,
                        'item_id'    => 235,
                        'stat_id'    => 15,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                57  =>
                    [
                        'id'         => 77,
                        'item_id'    => 126,
                        'stat_id'    => 27,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                58  =>
                    [
                        'id'         => 78,
                        'item_id'    => 126,
                        'stat_id'    => 12,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                59  =>
                    [
                        'id'         => 80,
                        'item_id'    => 126,
                        'stat_id'    => 13,
                        'value'      => '["9"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                60  =>
                    [
                        'id'         => 81,
                        'item_id'    => 14,
                        'stat_id'    => 32,
                        'value'      => '["20"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                61  =>
                    [
                        'id'         => 82,
                        'item_id'    => 114,
                        'stat_id'    => 32,
                        'value'      => '["40"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                62  =>
                    [
                        'id'         => 83,
                        'item_id'    => 69,
                        'stat_id'    => 39,
                        'value'      => '["100"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                63  =>
                    [
                        'id'         => 85,
                        'item_id'    => 29,
                        'stat_id'    => 31,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                64  =>
                    [
                        'id'         => 86,
                        'item_id'    => 34,
                        'stat_id'    => 39,
                        'value'      => '["50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                65  =>
                    [
                        'id'         => 87,
                        'item_id'    => 114,
                        'stat_id'    => 31,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                66  =>
                    [
                        'id'         => 88,
                        'item_id'    => 114,
                        'stat_id'    => 39,
                        'value'      => '["150"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                67  =>
                    [
                        'id'         => 89,
                        'item_id'    => 28,
                        'stat_id'    => 27,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                68  =>
                    [
                        'id'         => 90,
                        'item_id'    => 27,
                        'stat_id'    => 12,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                69  =>
                    [
                        'id'         => 91,
                        'item_id'    => 72,
                        'stat_id'    => 1,
                        'value'      => '["175"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                70  =>
                    [
                        'id'         => 92,
                        'item_id'    => 72,
                        'stat_id'    => 23,
                        'value'      => '["175"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                71  =>
                    [
                        'id'         => 93,
                        'item_id'    => 138,
                        'stat_id'    => 27,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                72  =>
                    [
                        'id'         => 94,
                        'item_id'    => 138,
                        'stat_id'    => 12,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                73  =>
                    [
                        'id'         => 95,
                        'item_id'    => 138,
                        'stat_id'    => 31,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                74  =>
                    [
                        'id'         => 96,
                        'item_id'    => 138,
                        'stat_id'    => 1,
                        'value'      => '["175"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                75  =>
                    [
                        'id'         => 97,
                        'item_id'    => 138,
                        'stat_id'    => 23,
                        'value'      => '["175"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                76  =>
                    [
                        'id'         => 98,
                        'item_id'    => 30,
                        'stat_id'    => 12,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                77  =>
                    [
                        'id'         => 99,
                        'item_id'    => 30,
                        'stat_id'    => 27,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                78  =>
                    [
                        'id'         => 100,
                        'item_id'    => 30,
                        'stat_id'    => 31,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                79  =>
                    [
                        'id'         => 101,
                        'item_id'    => 199,
                        'stat_id'    => 1,
                        'value'      => '["225"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                80  =>
                    [
                        'id'         => 102,
                        'item_id'    => 199,
                        'stat_id'    => 23,
                        'value'      => '["250"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                81  =>
                    [
                        'id'         => 103,
                        'item_id'    => 199,
                        'stat_id'    => 27,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                82  =>
                    [
                        'id'         => 104,
                        'item_id'    => 199,
                        'stat_id'    => 31,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                83  =>
                    [
                        'id'         => 105,
                        'item_id'    => 199,
                        'stat_id'    => 12,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                84  =>
                    [
                        'id'         => 106,
                        'item_id'    => 3,
                        'stat_id'    => 13,
                        'value'      => '["12"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                85  =>
                    [
                        'id'         => 108,
                        'item_id'    => 4,
                        'stat_id'    => 15,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                86  =>
                    [
                        'id'         => 109,
                        'item_id'    => 5,
                        'stat_id'    => 13,
                        'value'      => '["14"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                87  =>
                    [
                        'id'         => 111,
                        'item_id'    => 7,
                        'stat_id'    => 13,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                88  =>
                    [
                        'id'         => 112,
                        'item_id'    => 7,
                        'stat_id'    => 9,
                        'value'      => '["85"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                89  =>
                    [
                        'id'         => 113,
                        'item_id'    => 7,
                        'stat_id'    => 8,
                        'value'      => '["0"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                90  =>
                    [
                        'id'         => 114,
                        'item_id'    => 7,
                        'stat_id'    => 6,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                91  =>
                    [
                        'id'         => 115,
                        'item_id'    => 7,
                        'stat_id'    => 7,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                92  =>
                    [
                        'id'         => 117,
                        'item_id'    => 7,
                        'stat_id'    => 10,
                        'value'      => '["0"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                93  =>
                    [
                        'id'         => 118,
                        'item_id'    => 177,
                        'stat_id'    => 12,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                94  =>
                    [
                        'id'         => 119,
                        'item_id'    => 177,
                        'stat_id'    => 13,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                95  =>
                    [
                        'id'         => 120,
                        'item_id'    => 177,
                        'stat_id'    => 6,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                96  =>
                    [
                        'id'         => 121,
                        'item_id'    => 177,
                        'stat_id'    => 7,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                97  =>
                    [
                        'id'         => 122,
                        'item_id'    => 177,
                        'stat_id'    => 9,
                        'value'      => '["85"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                98  =>
                    [
                        'id'         => 124,
                        'item_id'    => 177,
                        'stat_id'    => 10,
                        'value'      => '["2.3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                99  =>
                    [
                        'id'         => 125,
                        'item_id'    => 177,
                        'stat_id'    => 8,
                        'value'      => '["1.4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                100 =>
                    [
                        'id'         => 126,
                        'item_id'    => 169,
                        'stat_id'    => 13,
                        'value'      => '["66"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                101 =>
                    [
                        'id'         => 127,
                        'item_id'    => 169,
                        'stat_id'    => 6,
                        'value'      => '["35"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                102 =>
                    [
                        'id'         => 128,
                        'item_id'    => 169,
                        'stat_id'    => 7,
                        'value'      => '["35"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                103 =>
                    [
                        'id'         => 130,
                        'item_id'    => 169,
                        'stat_id'    => 9,
                        'value'      => '["160"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                104 =>
                    [
                        'id'         => 131,
                        'item_id'    => 169,
                        'stat_id'    => 10,
                        'value'      => '["0"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                105 =>
                    [
                        'id'         => 132,
                        'item_id'    => 169,
                        'stat_id'    => 8,
                        'value'      => '["0.01"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                106 =>
                    [
                        'id'         => 135,
                        'item_id'    => 71,
                        'stat_id'    => 23,
                        'value'      => '["150"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                107 =>
                    [
                        'id'         => 136,
                        'item_id'    => 221,
                        'stat_id'    => 23,
                        'value'      => '["200"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                108 =>
                    [
                        'id'         => 137,
                        'item_id'    => 221,
                        'stat_id'    => 32,
                        'value'      => '["50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                109 =>
                    [
                        'id'         => 138,
                        'item_id'    => 96,
                        'stat_id'    => 15,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                110 =>
                    [
                        'id'         => 139,
                        'item_id'    => 22,
                        'stat_id'    => 12,
                        'value'      => '["1"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                111 =>
                    [
                        'id'         => 140,
                        'item_id'    => 22,
                        'stat_id'    => 27,
                        'value'      => '["1"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                112 =>
                    [
                        'id'         => 141,
                        'item_id'    => 22,
                        'stat_id'    => 31,
                        'value'      => '["1"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                113 =>
                    [
                        'id'         => 142,
                        'item_id'    => 96,
                        'stat_id'    => 12,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                114 =>
                    [
                        'id'         => 143,
                        'item_id'    => 96,
                        'stat_id'    => 31,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                115 =>
                    [
                        'id'         => 144,
                        'item_id'    => 96,
                        'stat_id'    => 27,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                116 =>
                    [
                        'id'         => 145,
                        'item_id'    => 104,
                        'stat_id'    => 12,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                117 =>
                    [
                        'id'         => 146,
                        'item_id'    => 104,
                        'stat_id'    => 31,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                118 =>
                    [
                        'id'         => 147,
                        'item_id'    => 104,
                        'stat_id'    => 27,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                119 =>
                    [
                        'id'         => 148,
                        'item_id'    => 33,
                        'stat_id'    => 2,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                120 =>
                    [
                        'id'         => 149,
                        'item_id'    => 104,
                        'stat_id'    => 2,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                121 =>
                    [
                        'id'         => 150,
                        'item_id'    => 75,
                        'stat_id'    => 32,
                        'value'      => '["45"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                122 =>
                    [
                        'id'         => 151,
                        'item_id'    => 75,
                        'stat_id'    => 14,
                        'value'      => '["25"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                123 =>
                    [
                        'id'         => 152,
                        'item_id'    => 75,
                        'stat_id'    => 33,
                        'value'      => '["9"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                124 =>
                    [
                        'id'         => 153,
                        'item_id'    => 270,
                        'stat_id'    => 14,
                        'value'      => '["30","35","40","45","50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                125 =>
                    [
                        'id'         => 154,
                        'item_id'    => 270,
                        'stat_id'    => 32,
                        'value'      => '["50","55","60","65","70"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                126 =>
                    [
                        'id'         => 155,
                        'item_id'    => 270,
                        'stat_id'    => 33,
                        'value'      => '["15","24","36","54","72"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                127 =>
                    [
                        'id'         => 157,
                        'item_id'    => 270,
                        'stat_id'    => 34,
                        'value'      => '["300"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                128 =>
                    [
                        'id'         => 158,
                        'item_id'    => 270,
                        'stat_id'    => 35,
                        'value'      => '["30"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                129 =>
                    [
                        'id'         => 160,
                        'item_id'    => 126,
                        'stat_id'    => 31,
                        'value'      => '["13","16","19","22","25","28","31","34","37"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                130 =>
                    [
                        'id'         => 161,
                        'item_id'    => 42,
                        'stat_id'    => 27,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                131 =>
                    [
                        'id'         => 162,
                        'item_id'    => 42,
                        'stat_id'    => 31,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                132 =>
                    [
                        'id'         => 163,
                        'item_id'    => 42,
                        'stat_id'    => 12,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                133 =>
                    [
                        'id'         => 165,
                        'item_id'    => 8,
                        'stat_id'    => 13,
                        'value'      => '["24"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                134 =>
                    [
                        'id'         => 166,
                        'item_id'    => 146,
                        'stat_id'    => 12,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                135 =>
                    [
                        'id'         => 167,
                        'item_id'    => 146,
                        'stat_id'    => 13,
                        'value'      => '["24"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                136 =>
                    [
                        'id'         => 168,
                        'item_id'    => 290,
                        'stat_id'    => 13,
                        'value'      => '["24"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                137 =>
                    [
                        'id'         => 169,
                        'item_id'    => 290,
                        'stat_id'    => 12,
                        'value'      => '["14"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                138 =>
                    [
                        'id'         => 170,
                        'item_id'    => 290,
                        'stat_id'    => 27,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                139 =>
                    [
                        'id'         => 171,
                        'item_id'    => 290,
                        'stat_id'    => 31,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                140 =>
                    [
                        'id'         => 172,
                        'item_id'    => 42,
                        'stat_id'    => 40,
                        'value'      => '["17"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                141 =>
                    [
                        'id'         => 173,
                        'item_id'    => 42,
                        'stat_id'    => 41,
                        'value'      => '["1200"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                142 =>
                    [
                        'id'         => 174,
                        'item_id'    => 42,
                        'stat_id'    => 42,
                        'value'      => '["15"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                143 =>
                    [
                        'id'         => 175,
                        'item_id'    => 290,
                        'stat_id'    => 41,
                        'value'      => '["1200"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                144 =>
                    [
                        'id'         => 176,
                        'item_id'    => 290,
                        'stat_id'    => 40,
                        'value'      => '["17"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                145 =>
                    [
                        'id'         => 177,
                        'item_id'    => 290,
                        'stat_id'    => 42,
                        'value'      => '["15"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                146 =>
                    [
                        'id'         => 178,
                        'item_id'    => 290,
                        'stat_id'    => 43,
                        'value'      => '["20"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                147 =>
                    [
                        'id'         => 179,
                        'item_id'    => 290,
                        'stat_id'    => 30,
                        'value'      => '["0.1"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                148 =>
                    [
                        'id'         => 180,
                        'item_id'    => 290,
                        'stat_id'    => 44,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                149 =>
                    [
                        'id'         => 181,
                        'item_id'    => 40,
                        'stat_id'    => 40,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                150 =>
                    [
                        'id'         => 182,
                        'item_id'    => 40,
                        'stat_id'    => 42,
                        'value'      => '["15"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                151 =>
                    [
                        'id'         => 183,
                        'item_id'    => 40,
                        'stat_id'    => 41,
                        'value'      => '["1200"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                152 =>
                    [
                        'id'         => 184,
                        'item_id'    => 292,
                        'stat_id'    => 32,
                        'value'      => '["60","66","73","80","88"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                153 =>
                    [
                        'id'         => 185,
                        'item_id'    => 292,
                        'stat_id'    => 23,
                        'value'      => '["350","420","500","600","700"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                154 =>
                    [
                        'id'         => 186,
                        'item_id'    => 292,
                        'stat_id'    => 12,
                        'value'      => '["10","15","20","25","30"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                155 =>
                    [
                        'id'         => 187,
                        'item_id'    => 292,
                        'stat_id'    => 31,
                        'value'      => '["10","15","20","25","30"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                156 =>
                    [
                        'id'         => 188,
                        'item_id'    => 292,
                        'stat_id'    => 27,
                        'value'      => '["10","15","20","25","30"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                157 =>
                    [
                        'id'         => 189,
                        'item_id'    => 292,
                        'stat_id'    => 15,
                        'value'      => '["7","10","12","15","18"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                158 =>
                    [
                        'id'         => 190,
                        'item_id'    => 292,
                        'stat_id'    => 45,
                        'value'      => '["6","9","12","15","18"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                159 =>
                    [
                        'id'         => 191,
                        'item_id'    => 292,
                        'stat_id'    => 46,
                        'value'      => '["20","25","30","35","40"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                160 =>
                    [
                        'id'         => 192,
                        'item_id'    => 292,
                        'stat_id'    => 52,
                        'value'      => '["3","4","5","6","7"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                161 =>
                    [
                        'id'         => 193,
                        'item_id'    => 292,
                        'stat_id'    => 53,
                        'value'      => '["17","20","23","26","29"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                162 =>
                    [
                        'id'         => 194,
                        'item_id'    => 292,
                        'stat_id'    => 47,
                        'value'      => '["20"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                163 =>
                    [
                        'id'         => 195,
                        'item_id'    => 292,
                        'stat_id'    => 48,
                        'value'      => '["900"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                164 =>
                    [
                        'id'         => 196,
                        'item_id'    => 292,
                        'stat_id'    => 49,
                        'value'      => '["350","450","550","650","750"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                165 =>
                    [
                        'id'         => 197,
                        'item_id'    => 292,
                        'stat_id'    => 50,
                        'value'      => '["200","250","325","400","475"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                166 =>
                    [
                        'id'         => 198,
                        'item_id'    => 292,
                        'stat_id'    => 54,
                        'value'      => '["100","150","225","340","450"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                167 =>
                    [
                        'id'         => 199,
                        'item_id'    => 292,
                        'stat_id'    => 51,
                        'value'      => '["25","40","60","85","110"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                168 =>
                    [
                        'id'         => 200,
                        'item_id'    => 20,
                        'stat_id'    => 27,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                169 =>
                    [
                        'id'         => 204,
                        'item_id'    => 16,
                        'stat_id'    => 3,
                        'value'      => '["16"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                170 =>
                    [
                        'id'         => 205,
                        'item_id'    => 16,
                        'stat_id'    => 5,
                        'value'      => '["8"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                171 =>
                    [
                        'id'         => 206,
                        'item_id'    => 16,
                        'stat_id'    => 4,
                        'value'      => '["50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                172 =>
                    [
                        'id'         => 207,
                        'item_id'    => 83,
                        'stat_id'    => 27,
                        'value'      => '["6"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                173 =>
                    [
                        'id'         => 208,
                        'item_id'    => 83,
                        'stat_id'    => 4,
                        'value'      => '["50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                174 =>
                    [
                        'id'         => 209,
                        'item_id'    => 83,
                        'stat_id'    => 3,
                        'value'      => '["20"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                175 =>
                    [
                        'id'         => 210,
                        'item_id'    => 83,
                        'stat_id'    => 5,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                176 =>
                    [
                        'id'         => 211,
                        'item_id'    => 83,
                        'stat_id'    => 55,
                        'value'      => '["100"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                177 =>
                    [
                        'id'         => 212,
                        'item_id'    => 302,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                178 =>
                    [
                        'id'         => 213,
                        'item_id'    => 304,
                        'stat_id'    => 30,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                179 =>
                    [
                        'id'         => 214,
                        'item_id'    => 306,
                        'stat_id'    => 30,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                180 =>
                    [
                        'id'         => 215,
                        'item_id'    => 308,
                        'stat_id'    => 30,
                        'value'      => '["4"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                181 =>
                    [
                        'id'         => 216,
                        'item_id'    => 310,
                        'stat_id'    => 30,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                182 =>
                    [
                        'id'         => 218,
                        'item_id'    => 312,
                        'stat_id'    => 30,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                183 =>
                    [
                        'id'         => 219,
                        'item_id'    => 314,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                184 =>
                    [
                        'id'         => 220,
                        'item_id'    => 316,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                185 =>
                    [
                        'id'         => 221,
                        'item_id'    => 319,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                186 =>
                    [
                        'id'         => 222,
                        'item_id'    => 321,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                187 =>
                    [
                        'id'         => 223,
                        'item_id'    => 323,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                188 =>
                    [
                        'id'         => 224,
                        'item_id'    => 325,
                        'stat_id'    => 30,
                        'value'      => '["0.5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                189 =>
                    [
                        'id'         => 225,
                        'item_id'    => 334,
                        'stat_id'    => 30,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                190 =>
                    [
                        'id'         => 226,
                        'item_id'    => 338,
                        'stat_id'    => 30,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                191 =>
                    [
                        'id'         => 227,
                        'item_id'    => 343,
                        'stat_id'    => 30,
                        'value'      => '["5"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                192 =>
                    [
                        'id'         => 228,
                        'item_id'    => 173,
                        'stat_id'    => 27,
                        'value'      => '["30","35","40","45","50"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                193 =>
                    [
                        'id'         => 229,
                        'item_id'    => 9,
                        'stat_id'    => 15,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                194 =>
                    [
                        'id'         => 230,
                        'item_id'    => 10,
                        'stat_id'    => 13,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                195 =>
                    [
                        'id'         => 231,
                        'item_id'    => 10,
                        'stat_id'    => 14,
                        'value'      => '["10"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                196 =>
                    [
                        'id'         => 232,
                        'item_id'    => 15,
                        'stat_id'    => 15,
                        'value'      => '["2"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                197 =>
                    [
                        'id'         => 233,
                        'item_id'    => 19,
                        'stat_id'    => 12,
                        'value'      => '["3"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                198 =>
                    [
                        'id'         => 234,
                        'item_id'    => 32,
                        'stat_id'    => 13,
                        'value'      => '["15"]',
                        'created_at' => null,
                        'updated_at' => null,
                    ],
            ]
        );


    }
}
