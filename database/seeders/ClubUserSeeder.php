<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role=['president','vice_president','super_admin'];
        $faker = Faker::create();
        $user= User::pluck('id')->toArray();
        $club= Club::pluck('id')->toArray();
        for ($i=1 ; $i<21; $i++ ){
            DB::table('club_user')->insert([
                'user_id'=>$faker->randomElement($user),
                'club_id'=>$faker->unique()->randomElement($club),
                'role'=>$user_role[rand(0,2)],
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
