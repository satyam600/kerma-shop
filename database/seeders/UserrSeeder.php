<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Userr;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;


class UserrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i<100; $i++) {
            $user=new Userr();
            $user->user_name=$faker->userName;
            $hashpassword=Hash::make($faker->password);
            $user->password=$hashpassword;
            $user->f_name=$faker->firstName;
            $user->l_name=$faker->lastName;
            $user->gender_id=rand(1,3);
            $user->phone=$faker->phoneNumber;
            $user->email=$faker->email;
            $user->address=$faker->address;
            $user->state=$faker->state;
            $user->r_date=now();
            $user->terms=Arr::random(['Yes', 'No']);
            $user->newsletters=Arr::random(['Yes', 'No']);
            $user->promotion=Arr::random(['Yes', 'No']);
            $user->status=$faker->word;
            $user->email_verified_at=now();
            $user->remember_tocken=$faker->uuid;
            $user->save();
        }
    }
}
