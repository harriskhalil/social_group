<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1 ; $i<21; $i++ ){
            DB::table('announcements')->insert([
                'user_id'=>rand(1,20),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
