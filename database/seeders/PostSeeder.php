<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
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
        $faker = Faker\Factory::create();
        for($i = 0; $i < 15; $i++){
            $item = [
                'title' => $faker->realText(50),
                'cate_id' => rand(12, 19),
                'content' => $faker->realText(150, 2),
                'image'=> "images/anh-".rand(1, 4).".jpg",
                'short_desc' => $faker->realText(80),
                'author' => $faker->name(),
            ];
            DB::table('posts')->insert($item);    
        }
        // chạy lệnh trong cmd: php artisan db:seed --class=CategorySeeder    
    }
}
