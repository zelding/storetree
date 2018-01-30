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

        \DB::table('users')->insert(
            [
                0  => [
                    'id'             => 1,
                    'name'           => 'zedling',
                    'email'          => 'gammaray.zedling@gmail.com',
                    'password'       => '$2y$10$0eigaI.MULRl.68MCyQCZ.QpaG1Wh4sb9MhKxL/zEckdQmFxV2jqu',
                    'remember_token' => '53QR00VwC0RRHbVfBgVA0sNPDrP9xTOMKJ60WRYcGmPBUBhL4DOL5yTbnnhH',
                    'created_at'     => '2017-02-15 10:19:10',
                    'updated_at'     => '2017-02-15 10:19:10',
                    'api_token'      => '554d90c7b5267176c77aadb0a407a40d0249525f9dd490de1ac4ba06df839ee72a3503dd2e602a8e171b286a67defa9876a60f38911aca43b74e811edc22d030',
                ],
                1  => [
                    'id'             => 3,
                    'name'           => 'Translator',
                    'email'          => 'locale@test.com',
                    'password'       => '$2y$10$xblbMeVR.xwx1Xh3hRiFQ.vCSDZU5OtFxIRdvf9H5DoCCogtENVsu',
                    'remember_token' => null,
                    'created_at'     => '2017-03-18 20:41:23',
                    'updated_at'     => '2017-03-18 20:41:23',
                    'api_token'      => null,
                ],
                2  => [
                    'id'             => 4,
                    'name'           => 'Warpdragon',
                    'email'          => 'Artfulgamers@gmail.com',
                    'password'       => '$2y$10$o1kzef2A3G0kLL3jjRblh.7xRQUwQIwBZ7BrFcLoTE.2IyMTeIV6a',
                    'remember_token' => null,
                    'created_at'     => '2017-03-20 13:33:19',
                    'updated_at'     => '2017-03-20 13:33:19',
                    'api_token'      => null,
                ],
                3  => [
                    'id'             => 5,
                    'name'           => 'VoidsKeeper',
                    'email'          => 'rdgusev@gmail.com',
                    'password'       => '$2y$10$.FEu0Ora/RXC188NRkonjusgnU1O3hvVuujBUrLbrdDl/j0CZaX1u',
                    'remember_token' => null,
                    'created_at'     => '2017-03-21 13:05:40',
                    'updated_at'     => '2017-03-21 13:05:40',
                    'api_token'      => null,
                ],
                4  => [
                    'id'             => 6,
                    'name'           => 'Baumi',
                    'email'          => 'beaverbaumi@gmail.com',
                    'password'       => '$2y$10$zw5bstoqndCm6Y14Goh3ku29ZmXspHo.kTo07XW91dCwyz4aZRiMu',
                    'remember_token' => null,
                    'created_at'     => '2017-03-22 18:00:56',
                    'updated_at'     => '2017-03-22 18:00:56',
                    'api_token'      => null,
                ],
                5  => [
                    'id'             => 7,
                    'name'           => 'DJBotan',
                    'email'          => 'djbotan@mail.ru',
                    'password'       => '$2y$10$nUT4HEdnxy/n2EWDD.4GFuZWnbB1/TxzuslMg5aq/bjuKIYj2fbdq',
                    'remember_token' => 'ByUvSnxTG7LWw3zbX32tUgmjuHhLD6wmnHWd8eueo43doFs3eE7pKIIpTl7o',
                    'created_at'     => '2017-03-22 20:39:16',
                    'updated_at'     => '2017-03-22 20:39:16',
                    'api_token'      => null,
                ],
                6  => [
                    'id'             => 8,
                    'name'           => 'Jellicent',
                    'email'          => 'burakkayarlar@hotmail.com',
                    'password'       => '$2y$10$hXlWGOyIYnvyvPvPH6QAD.5PTjTZFqmh9zG79IIY1xgmk8GkDxnMG',
                    'remember_token' => null,
                    'created_at'     => '2017-03-23 13:42:25',
                    'updated_at'     => '2017-03-23 13:42:25',
                    'api_token'      => null,
                ],
                7  => [
                    'id'             => 9,
                    'name'           => 'McUschi',
                    'email'          => 'maxalexander99@gmx.de',
                    'password'       => '$2y$10$VgUZHT1RJng/gxAGJkvB/uRTsq2eAPbvUyo842Y64imTiWwuLWWVa',
                    'remember_token' => 'RWiy5PC5gl0AF4TO0a0mLSBh8wnuyqQR3p2jPDiodDEStDG92MnZDsqlvUsd',
                    'created_at'     => '2017-03-23 15:55:42',
                    'updated_at'     => '2017-03-23 15:55:42',
                    'api_token'      => '454d90c7b5267176c77aadb0a407a40d0249525f9dd490de1ac4ba06df839ee72a3503dd2e602a8e171b286a67defa9876a60f38911aca43b74e811edc22d031',
                ],
                8  => [
                    'id'             => 10,
                    'name'           => 'imaGecko',
                    'email'          => 'florian2204@yahoo.de',
                    'password'       => '$2y$10$I4GGW1OIVFxlwLtGvJL1YujCL6KGwNdMvTKYzcjlyD0Yo8vIu1U8y',
                    'remember_token' => 'Ld6SZbu8pa2TXGOVpqykqbrsjb6aXAyfFNUoIwHD4AFgDPG8ifjkO6RPBhWx',
                    'created_at'     => '2017-06-01 12:27:57',
                    'updated_at'     => '2017-06-01 12:27:57',
                    'api_token'      => null,
                ],
                9  => [
                    'id'             => 11,
                    'name'           => 'HarryPhoon',
                    'email'          => 'ondra.michal1@gmail.com',
                    'password'       => '$2y$10$WVM4lG5jB5IVwIr1VlTnsu1Tz0yrx12J0TPgn9CUM4XN.Go0.zcke',
                    'remember_token' => null,
                    'created_at'     => '2017-06-02 05:52:58',
                    'updated_at'     => '2017-06-02 05:52:58',
                    'api_token'      => null,
                ],
                10 => [
                    'id'             => 12,
                    'name'           => 'JuliaaExery',
                    'email'          => 'wielogorski727@gmail.com',
                    'password'       => '$2y$10$QeSA87FTLxkK.cJ9CwwFD.vex5DkdqgdWcVg2TR4fT6aaThe00JkG',
                    'remember_token' => null,
                    'created_at'     => '2018-01-06 20:29:28',
                    'updated_at'     => '2018-01-06 20:29:28',
                    'api_token'      => null,
                ],
                11 => [
                    'id'             => 13,
                    'name'           => 'IBurn36360',
                    'email'          => 'iburn36360@gmail.com',
                    'password'       => '$2y$10$N.Zx2ghpo9f0MyOWoVKcJ.EG4EM800ScvzxCqSNGmzLNifCJ70fVe',
                    'remember_token' => null,
                    'created_at'     => '2018-01-22 11:28:08',
                    'updated_at'     => '2018-01-22 11:28:08',
                    'api_token'      => null,
                ],
            ]
        );
    }
}
