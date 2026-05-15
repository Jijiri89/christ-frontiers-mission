<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leader;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Leader::updateOrCreate(
            [
                'name' => 'Rev. John Doe',
            ],
            [
                'position' => 'Founder & General Overseer',

                'bio' => 'Committed to preaching the Gospel and raising disciples worldwide.',

                'image' => 'leaders/pastor.jpg',

                'sort_order' => 1,
            ]
        );

        Leader::updateOrCreate(
            [
                'name' => 'Pastor Grace Doe',
            ],
            [
                'position' => 'Associate Pastor',

                'bio' => 'Dedicated to prayer, counseling, and spiritual mentorship.',

                'image' => 'leaders/pastor2.jpg',

                'sort_order' => 2,
            ]
        );
    }
}