<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(
            [
                0 =>
                    [
                        'id'           => 1,
                        'name'         => 'edit_users',
                        'display_name' => 'Edit users',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:28:38',
                        'updated_at'   => '2017-03-18 14:28:38',
                    ],
                1 =>
                    [
                        'id'           => 2,
                        'name'         => 'edit_item_data',
                        'display_name' => 'Edit basic item data',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:29:17',
                        'updated_at'   => '2017-03-18 14:29:17',
                    ],
                2 =>
                    [
                        'id'           => 3,
                        'name'         => 'edit_item_stats',
                        'display_name' => 'Edit item stats',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:29:37',
                        'updated_at'   => '2017-03-18 14:29:37',
                    ],
                3 =>
                    [
                        'id'           => 4,
                        'name'         => 'edit_item_abilities',
                        'display_name' => 'Edit item abilities',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:29:53',
                        'updated_at'   => '2017-03-18 14:29:53',
                    ],
                4 =>
                    [
                        'id'           => 5,
                        'name'         => 'edit_item_locale',
                        'display_name' => 'Edit item translations',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:30:07',
                        'updated_at'   => '2017-03-18 14:30:07',
                    ],
                5 =>
                    [
                        'id'           => 6,
                        'name'         => 'edit_stats',
                        'display_name' => 'Edit stats',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:30:24',
                        'updated_at'   => '2017-03-18 14:30:24',
                    ],
                6 =>
                    [
                        'id'           => 7,
                        'name'         => 'edit_abilities',
                        'display_name' => 'Edit abilities',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:30:36',
                        'updated_at'   => '2017-03-18 14:30:36',
                    ],
                7 =>
                    [
                        'id'           => 9,
                        'name'         => 'export',
                        'display_name' => 'Export things',
                        'description'  => null,
                        'created_at'   => '2017-03-18 14:35:12',
                        'updated_at'   => '2017-03-18 14:35:12',
                    ],
                8 =>
                    [
                        'id'           => 10,
                        'name'         => 'delete',
                        'display_name' => 'Delete things',
                        'description'  => null,
                        'created_at'   => '2017-03-18 21:10:00',
                        'updated_at'   => '2017-03-18 21:10:00',
                    ],
            ]
        );


    }
}
