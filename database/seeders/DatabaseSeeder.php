<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Announcement;
use App\Models\Club;
use App\Models\Event;
use App\Models\User;
use App\Models\UserRole;
use Database\Factories\AnnouncementFactory;
use Database\Factories\ClubFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $count= 20;
        User::factory()->count($count)->create();
        Club::factory()->count($count)->create();
        $this->call([
//            AnnouncementSeeder::class,
            ClubUserSeeder::class,
        ]);
//        Event::factory()->count($count)->create();
    }
}
