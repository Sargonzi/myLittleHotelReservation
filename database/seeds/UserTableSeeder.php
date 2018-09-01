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
            'name' => "root",
            'email' => "root@email.com",
            'password' => bcrypt('secret'),
            'is_admin' => 1,
            'phone' => "09123456",
            'address' => $faker->address,
            'nrc' => '9/MaKaNa(N)123456',
            'passport' => $faker->creditCardNumber,
            'city' => $faker->city,
            'country' => $faker->country,
            'is_foreigner' => $faker->numberBetween(0, 1),
            'status' => $faker->numberBetween(0, 1)
        ]);
    }
}
