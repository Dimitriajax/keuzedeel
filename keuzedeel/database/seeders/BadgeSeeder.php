<?php

namespace Database\Seeders;

use App\Models\Badge;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */

    public function run()
    {
        $badges = [
            ['title' => 'bmi', 'url' =>  'bmi.png'],
            ['title' => 'dbp', 'url' => 'bloeddruk.png'],
            ['title' => 'kcal', 'url' => 'calorien.png'],
            ['title' => 'gender', 'url' => 'geslacht.png'],
            ['title' => 'weight', 'url' => 'kg.png'],
            ['title' => 'height', 'url' => 'lengte.png'],
        ];


        foreach ($badges as $badge) {

            Badge::query()->create([
                'title' => $badge['title'],
                'description' => '',
                'badge_url' => $badge['url']
            ]);
        }
    }
}