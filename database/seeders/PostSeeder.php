<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Post;


use Illuminate\Support\Facades\DB;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
            $faker = Faker::create();
                foreach (range(1,50) as $index) {
                    DB::table('posts')->insert([
                        'name' => $faker->name,
                        'content' => $faker->email,
                        'active' => '0',
                    ]);
                }
    }
}