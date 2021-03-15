<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 5; $i++){
            $item = [
                'name' => $faker->name,
                'logo'=> "images/anh-".rand(1, 4).".jpg"
            ];
            DB::table('categories')->insert($item);    
        }
        // chạy lệnh trong cmd: php artisan db:seed --class=CategorySeeder    
    }
}
