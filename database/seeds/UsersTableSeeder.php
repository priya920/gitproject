<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users=[[
            'emp_name' => str_random(10),
            'phone' => "02".mt_rand(100000,99999),
            'address' => "house: ".mt_rand(1,100)." Road No: ".mt_rand(1,100)." City: Dhaka"." Post: ".mt_rand(1000,9999)
        ],
        [
            'emp_name' => str_random(10),
            'phone' => "02".mt_rand(100000,99999),
            'address' =>"house:".mt_rand(1,100)."Road No:".mt_rand(1,100)."city:Dhaka
            "." post:".mt_rand(1000,9999)
        ],

        [
            'emp_name' => str_random(10),
            'phone' => "02".mt_rand(100000,99999),
            'address' =>"house:".mt_rand(1,100)."Road No:".mt_rand(1,100)."city:Dhaka
            "." post:".mt_rand(1000,9999)
        ],

        [
            'emp_name' => str_random(10),
            'phone' => "02".mt_rand(100000,99999),
            'address' =>"house:".mt_rand(1,100)."Road No:".mt_rand(1,100)."city:Dhaka
            "." post:".mt_rand(1000,9999)
        ],

        [
            'emp_name' => str_random(10),
            'phone' => "02".mt_rand(100000,99999),
            'address' =>"house:".mt_rand(1,100)."Road No:".mt_rand(1,100)."city:Dhaka
            "." post:".mt_rand(1000,9999)
        ],

        ];
         
         DB::table('users')->insert($users);
    }
}
