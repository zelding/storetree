<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

        \DB::table('roles')->insert(
            [
                0 => [
                    'id'           => 1,
                    'name'         => 'admin',
                    'display_name' => 'Administrator',
                    'description'  => null,
                    'created_at'   => '2017-03-18 14:22:37',
                    'updated_at'   => '2017-03-18 14:22:37',
                ],
                1 => [
                    'id'           => 3,
                    'name'         => 'translator',
                    'display_name' => 'Translator',
                    'description'  => null,
                    'created_at'   => '2017-03-18 14:24:58',
                    'updated_at'   => '2017-03-18 14:24:58',
                ],
                2 => [
                    'id'           => 4,
                    'name'         => 'item_manager',
                    'display_name' => 'Item manager',
                    'description'  => null,
                    'created_at'   => '2017-03-18 14:25:20',
                    'updated_at'   => '2017-03-18 14:25:20',
                ],
                3 => [
                    'id'           => 6,
                    'name'         => 'addons_manager',
                    'display_name' => 'Stats and Abilities manager',
                    'description'  => null,
                    'created_at'   => '2017-03-18 14:22:37',
                    'updated_at'   => '2017-03-18 14:22:37',
                ],
            ]
        );
    }
}
