<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 20) as $value) {
            User::create([
                'name' => $faker->text('20'),
                'email' => $faker->email,
                'dob'=> $faker->date(),
                'password' => bcrypt('anhvit12'),
            ]);

        }
    }
}
