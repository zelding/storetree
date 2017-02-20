<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'zedling',
                'email' => 'gammaray.zedling@gmail.com',
                'password' => '$2y$10$0eigaI.MULRl.68MCyQCZ.QpaG1Wh4sb9MhKxL/zEckdQmFxV2jqu',
                'remember_token' => 'ymgy2Pw1UoJRZzEVanPEq2Wj3g5Ydn5zdqmwezEdN4GGQw2F6zzjLAVCdrHZ',
                'created_at' => '2017-02-15 10:19:10',
                'updated_at' => '2017-02-15 10:19:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Test user',
                'email' => 'test@test.com',
                'password' => '$2y$10$czcddBaSA/SleE4YCw7xZ.C4bNhm6nom5QNgZ9STOhCJ1c8qU1a/6',
                'remember_token' => NULL,
                'created_at' => '2017-02-18 14:29:06',
                'updated_at' => '2017-02-18 14:29:06',
            ),
        ));
        
        
    }
}