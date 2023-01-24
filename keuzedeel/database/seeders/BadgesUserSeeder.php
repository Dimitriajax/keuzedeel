<?php

namespace Database\Seeders;

use App\Models\BadgesUser;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BadgesUser::query()->create([
            'user_id' => 1,
            'badge_id' => 1
        ]);
    }
}