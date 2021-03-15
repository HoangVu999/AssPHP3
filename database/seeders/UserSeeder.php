<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_lst = [
            [
                'name' => 'administrator',
                'email' => 'hoangvdph08731@fpt.edu.vn',
                'password' => Hash::make('123456'),
                'role' => '1'
            ],
            [
                'name' => 'member',
                'email' => 'hoangoangvu99@gmail.com',
                'password' => Hash::make('123456'),
                'role' => '0'
            ]
        ];

        foreach($user_lst as $item){
            $model = new User();
            $model->fill($item);
            $model->save();
        }
        
    }
}
