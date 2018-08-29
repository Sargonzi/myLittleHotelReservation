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
                'is_admin' => $faker->numberBetween(0, 1),
                'phone' => $faker->phoneNumber
            ]);
        }
        foreach (range(1, 10) as $index) {
            DB::table('room_types')->insert([
                'type' => $faker->word,
            ]);

            DB::table('rooms')->insert([
                'name' => 'Room-' . $faker->numberBetween(0, 100),
                'price' => $faker->numberBetween(1000, 5000),
                'roomtype_id' => $faker->numberBetween(0, 10),
                'maxPerson' => $faker->numberBetween(2, 5)
            ]);
        }

    }
}