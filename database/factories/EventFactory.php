<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user= DB::table('club_user')->pluck('user_id')->toArray();
        $club= DB::table('club_user')->pluck('club_id')->toArray();
        return [
//            'club_id'=>$this->faker->numberBetween(1,20),
            'club_id'=>$this->faker->randomElement($club),
            'user_id'=>$this->faker->randomElement($user),
            'description'=>$this->faker->sentence,
            'icon_url'=>$this->faker->url(),
            'amount'=>$this->faker->numerify(),
            'goal_ended_at'=>$this->faker->dateTime,
        ];
    }

}
