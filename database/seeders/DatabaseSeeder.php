<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call([
            HomepageSectionSeeder::class,
             LeaderSeeder::class,
        ]);
        // User::factory(10)->create();

        \App\Models\Setting::firstOrCreate([
    'id' => 1,
], [
    'site_name' => 'Christ Frontiers Mission International',
]);
    }
}
