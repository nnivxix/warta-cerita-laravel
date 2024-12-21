<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Story;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;


class StorySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        Story::factory(20)->state(new Sequence(
            fn() => [
                'user_id' => random_int(1, $users->count()),
            ]
        ))
            ->create();
    }
}
