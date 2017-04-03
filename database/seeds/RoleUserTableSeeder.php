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
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'role_id' => 1,
            ),
            1 => 
            array (
                'user_id' => 3,
                'role_id' => 3,
            ),
            2 => 
            array (
                'user_id' => 4,
                'role_id' => 3,
            ),
            3 => 
            array (
                'user_id' => 5,
                'role_id' => 3,
            ),
            4 => 
            array (
                'user_id' => 6,
                'role_id' => 3,
            ),
            5 => 
            array (
                'user_id' => 1,
                'role_id' => 4,
            ),
            6 => 
            array (
                'user_id' => 3,
                'role_id' => 4,
            ),
            7 => 
            array (
                'user_id' => 4,
                'role_id' => 4,
            ),
            8 => 
            array (
                'user_id' => 5,
                'role_id' => 4,
            ),
            9 => 
            array (
                'user_id' => 6,
                'role_id' => 4,
            ),
            10 => 
            array (
                'user_id' => 4,
                'role_id' => 6,
            ),
            11 => 
            array (
                'user_id' => 5,
                'role_id' => 6,
            ),
            12 => 
            array (
                'user_id' => 6,
                'role_id' => 6,
            ),
        ));
        
        
    }
}