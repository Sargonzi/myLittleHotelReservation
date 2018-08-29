<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => "root",
            'email' => "root@email.com",
            'password' => bcrypt('secret'),
            'is_admin'=> 1,
            'phone' => "09123456"
        ]);
    }
}
