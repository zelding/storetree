<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('role_user')->delete();

        \DB::table('role_user')->insert(
            [
                0  => [
                    'user_id' => 1,
                    'role_id' => 1,
                ],
                1  => [
                    'user_id' => 4,
                    'role_id' => 1,
                ],
                2  => [
                    'user_id' => 3,
                    'role_id' => 3,
                ],
                3  => [
                    'user_id' => 5,
                    'role_id' => 3,
                ],
                4  => [
                    'user_id' => 6,
                    'role_id' => 3,
                ],
                5  => [
                    'user_id' => 10,
                    'role_id' => 3,
                ],
                6  => [
                    'user_id' => 13,
                    'role_id' => 3,
                ],
                7  => [
                    'user_id' => 1,
                    'role_id' => 4,
                ],
                8  => [
                    'user_id' => 3,
                    'role_id' => 4,
                ],
                9  => [
                    'user_id' => 4,
                    'role_id' => 4,
                ],
                10 => [
                    'user_id' => 5,
                    'role_id' => 4,
                ],
                11 => [
                    'user_id' => 6,
                    'role_id' => 4,
                ],
                12 => [
                    'user_id' => 10,
                    'role_id' => 4,
                ],
                13 => [
                    'user_id' => 13,
                    'role_id' => 4,
                ],
                14 => [
                    'user_id' => 5,
                    'role_id' => 6,
                ],
                15 => [
                    'user_id' => 6,
                    'role_id' => 6,
                ],
                16 => [
                    'user_id' => 10,
                    'role_id' => 6,
                ],
                17 => [
                    'user_id' => 13,
                    'role_id' => 6,
                ],
            ]
        );
    }
}
