<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'is_admin' => "0",
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'nrc' => '9/MaKaNa(N)123456',
                'passport' => $faker->creditCardNumber,
                'city' => $faker->city,
                'country' => $faker->country,
                'is_foreigner' => $faker->numberBetween(0, 1),
                'status' => "1"
            ]);
        }
        foreach (range(1, 5) as $index) {
            DB::table('room_types')->insert([
                'type' => $faker->word,
            ]);
        }
        foreach (range(1, 100) as $index) {
            DB::table('rooms')->insert([
                'name' => 'Room-' . $faker->numberBetween(0, 100),
                'price' => $faker->numberBetween(1000, 5000),
                'roomtype_id' => $faker->numberBetween(1, 5),
                'maxPerson' => $faker->numberBetween(2, 5)
            ]);
        }

    }
}