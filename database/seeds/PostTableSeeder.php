<?php

use Illuminate\Database\Seeder;
use App\Models\Posts;
class PostTableSeeder extends Seeder
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
            Posts::create([
                'title' => $faker->text('20'),
                'content' => $faker->text('500'),
            ]);

        }
    }
}
