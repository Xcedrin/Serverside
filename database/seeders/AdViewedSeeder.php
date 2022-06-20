<?php

namespace Database\Seeders;

use App\Models\AdView;
use Illuminate\Database\Seeder;

class AdViewedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdView::create([
            'user_id' => 1,
            'ad_id' => 1,
            'count' => 6
        ]);

        AdView::create([
            'user_id' => 1,
            'ad_id' => 2,
            'count' => 4
        ]);

        AdView::create([
            'user_id' => 1,
            'ad_id' => 3,
            'count' => 5
        ]);

        AdView::create([
            'user_id' => 1,
            'ad_id' => 4,
            'count' => 9
        ]);

        AdView::create([
            'user_id' => 1,
            'ad_id' => 5,
            'count' => 1
        ]);

        AdView::create([
            'user_id' => 1,
            'ad_id' => 6,
            'count' => 2
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 1,
            'count' => 6
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 2,
            'count' => 4
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 3,
            'count' => 5
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 4,
            'count' => 9
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 5,
            'count' => 1
        ]);

        AdView::create([
            'user_id' => 2,
            'ad_id' => 6,
            'count' => 2
        ]);
    }
}
