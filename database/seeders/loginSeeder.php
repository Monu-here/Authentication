<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use faker\Factory as Faker;
use PharIo\Manifest\Email;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i <10; $i++){
            User::create([
                'email' => $faker->email,
                'password' => 'monu',
            ]);
        }


    }
}
