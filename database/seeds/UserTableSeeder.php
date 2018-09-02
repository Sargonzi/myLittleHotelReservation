<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

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
        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => "Kyaw zin Htet",
            'email' => "kyawzin@email.com",
            'password' => bcrypt('secret'),
            'is_admin' => "1",
            'phone' => "09123456",
            'address' => $faker->address,
            'nrc' => '9/MaKaNa(N)123456',
            'passport' => $faker->creditCardNumber,
            'city' => $faker->city,
            'country' => $faker->country,
            'is_foreigner' => "0",
            'status' => "1"
        ]);

        DB::table('users')->insert([
            'name' => "Kyaw Zin Htet (client)",
            'email' => "test@email.com",
            'password' => bcrypt('secret'),
            'is_admin' => "0",
            'phone' => "09123456",
            'address' => $faker->address,
            'nrc' => '9/MaKaNa(N)123456',
            'passport' => $faker->creditCardNumber,
            'city' => $faker->city,
            'country' => $faker->country,
            'is_foreigner' => "0",
            'status' => "1"
        ]);
    }
}
