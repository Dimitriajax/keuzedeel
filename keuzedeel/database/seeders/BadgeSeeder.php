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
     */
    public function run()
    {
        Badge::query()->create([
            'title' => 'Badge 1',
            'description' => 'text',
            'badge_url' => 'https://www.iconpacks.net/icons/1/free-badge-icon-1361-thumb.png'
        ]);
    }
}