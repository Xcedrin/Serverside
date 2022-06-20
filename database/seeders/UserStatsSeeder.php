<?php

namespace Database\Seeders;

use App\Models\UserStats;
use Illuminate\Database\Seeder;

class UserStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserStats::factory(20)->create();
    }
}
