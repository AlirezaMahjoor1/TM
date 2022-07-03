<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TM\Core\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
            [
                [
                    'name'=>'علیرضا مهجور',
                    'cell_number'=> 9192906680,
                    'verified'=>1,
                    'password'=>bcrypt(123456789)
                ],
                [
                    'name'=>'علیرضا مهجور',
                    'cell_number'=> 9195800056,
                    'verified'=>1,
                    'password'=>bcrypt(123456789)
                ],

            ];
        foreach ($users as $user){
            User::query()->updateOrCreate($user);
        }
    }

}
