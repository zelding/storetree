<?php

use Illuminate\Database\Seeder;

class AbilityItemTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ability_item')->delete();

        \DB::table('ability_item')->insert(
            [
                0  =>
                    [
                        'id'         => 1,
                        'item_id'    => 173,
                        'ability_id' => 1,
                        'created_at' => '2017-03-06 12:05:00',
                        'updated_at' => '2017-03-06 12:05:00',
                    ],
                1  =>
                    [
                        'id'         => 2,
                        'item_id'    => 267,
                        'ability_id' => 1,
                        'created_at' => '2017-03-06 12:05:00',
                        'updated_at' => '2017-03-06 12:05:00',
                    ],
                2  =>
                    [
                        'id'         => 3,
                        'item_id'    => 262,
                        'ability_id' => 1,
                        'created_at' => '2017-03-06 12:05:00',
                        'updated_at' => '2017-03-06 12:05:00',
                    ],
                3  =>
                    [
                        'id'         => 5,
                        'item_id'    => 126,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                4  =>
                    [
                        'id'         => 6,
                        'item_id'    => 127,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                5  =>
                    [
                        'id'         => 7,
                        'item_id'    => 128,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                6  =>
                    [
                        'id'         => 8,
                        'item_id'    => 129,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                7  =>
                    [
                        'id'         => 9,
                        'item_id'    => 130,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                8  =>
                    [
                        'id'         => 10,
                        'item_id'    => 272,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                9  =>
                    [
                        'id'         => 11,
                        'item_id'    => 277,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                10 =>
                    [
                        'id'         => 12,
                        'item_id'    => 280,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                11 =>
                    [
                        'id'         => 13,
                        'item_id'    => 283,
                        'ability_id' => 2,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                12 =>
                    [
                        'id'         => 14,
                        'item_id'    => 285,
                        'ability_id' => 1,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                13 =>
                    [
                        'id'         => 15,
                        'item_id'    => 286,
                        'ability_id' => 1,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                14 =>
                    [
                        'id'         => 16,
                        'item_id'    => 290,
                        'ability_id' => 3,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                15 =>
                    [
                        'id'         => 17,
                        'item_id'    => 292,
                        'ability_id' => 5,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                16 =>
                    [
                        'id'         => 18,
                        'item_id'    => 302,
                        'ability_id' => 6,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                17 =>
                    [
                        'id'         => 19,
                        'item_id'    => 304,
                        'ability_id' => 7,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                18 =>
                    [
                        'id'         => 20,
                        'item_id'    => 306,
                        'ability_id' => 8,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                19 =>
                    [
                        'id'         => 21,
                        'item_id'    => 308,
                        'ability_id' => 9,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                20 =>
                    [
                        'id'         => 22,
                        'item_id'    => 310,
                        'ability_id' => 10,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                21 =>
                    [
                        'id'         => 23,
                        'item_id'    => 312,
                        'ability_id' => 11,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                22 =>
                    [
                        'id'         => 24,
                        'item_id'    => 314,
                        'ability_id' => 12,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                23 =>
                    [
                        'id'         => 25,
                        'item_id'    => 316,
                        'ability_id' => 13,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                24 =>
                    [
                        'id'         => 26,
                        'item_id'    => 319,
                        'ability_id' => 14,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                25 =>
                    [
                        'id'         => 27,
                        'item_id'    => 323,
                        'ability_id' => 15,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                26 =>
                    [
                        'id'         => 28,
                        'item_id'    => 325,
                        'ability_id' => 16,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                27 =>
                    [
                        'id'         => 29,
                        'item_id'    => 332,
                        'ability_id' => 17,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                28 =>
                    [
                        'id'         => 30,
                        'item_id'    => 334,
                        'ability_id' => 18,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                29 =>
                    [
                        'id'         => 31,
                        'item_id'    => 340,
                        'ability_id' => 19,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
                30 =>
                    [
                        'id'         => 32,
                        'item_id'    => 343,
                        'ability_id' => 20,
                        'created_at' => null,
                        'updated_at' => null,
                    ],
            ]
        );


    }
}
