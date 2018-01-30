<?php

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permission_role')->delete();

        \DB::table('permission_role')->insert(
            [
                0  =>
                    [
                        'permission_id' => 1,
                        'role_id'       => 1,
                    ],
                1  =>
                    [
                        'permission_id' => 2,
                        'role_id'       => 1,
                    ],
                2  =>
                    [
                        'permission_id' => 3,
                        'role_id'       => 1,
                    ],
                3  =>
                    [
                        'permission_id' => 4,
                        'role_id'       => 1,
                    ],
                4  =>
                    [
                        'permission_id' => 5,
                        'role_id'       => 1,
                    ],
                5  =>
                    [
                        'permission_id' => 6,
                        'role_id'       => 1,
                    ],
                6  =>
                    [
                        'permission_id' => 7,
                        'role_id'       => 1,
                    ],
                7  =>
                    [
                        'permission_id' => 9,
                        'role_id'       => 1,
                    ],
                8  =>
                    [
                        'permission_id' => 10,
                        'role_id'       => 1,
                    ],
                9  =>
                    [
                        'permission_id' => 5,
                        'role_id'       => 3,
                    ],
                10 =>
                    [
                        'permission_id' => 2,
                        'role_id'       => 4,
                    ],
                11 =>
                    [
                        'permission_id' => 3,
                        'role_id'       => 4,
                    ],
                12 =>
                    [
                        'permission_id' => 4,
                        'role_id'       => 4,
                    ],
                13 =>
                    [
                        'permission_id' => 6,
                        'role_id'       => 6,
                    ],
                14 =>
                    [
                        'permission_id' => 7,
                        'role_id'       => 6,
                    ],
                15 =>
                    [
                        'permission_id' => 9,
                        'role_id'       => 6,
                    ],
            ]
        );


    }
}
