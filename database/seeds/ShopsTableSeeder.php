<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shops')->delete();

        \DB::table('shops')->insert(
            [
                0 => [
                    'id'         => 1,
                    'name'       => 'Basic shop',
                    'created_at' => null,
                    'updated_at' => null,
                ],
                1 => [
                    'id'         => 2,
                    'name'       => 'Side shop',
                    'created_at' => null,
                    'updated_at' => null,
                ],
                2 => [
                    'id'         => 3,
                    'name'       => 'Secret shop',
                    'created_at' => null,
                    'updated_at' => null,
                ],
                3 => [
                    'id'         => 4,
                    'name'       => 'Azazel',
                    'created_at' => null,
                    'updated_at' => null,
                ],
            ]
        );
    }
}
