<?php

namespace Database\Seeders;

use App\Models\SurveyFilled;
use Illuminate\Database\Seeder;

class SurveyFilledSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 1,
            'question_id' => 1,
            'option' => 'Apr-Jun'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 1,
            'question_id' => 2,
            'option' => 'United states'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 1,
            'question_id' => 3,
            'option' => '$10k-$20k'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 1,
            'question_id' => 4,
            'option' => '3-6 months'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 2,
            'question_id' => 1,
            'option' => 'At home'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 2,
            'question_id' => 2,
            'option' => '5'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 2,
            'question_id' => 3,
            'option' => 'Once a week'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 2,
            'question_id' => 1,
            'option' => '2'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 3,
            'question_id' => 2,
            'option' => '1'
        ]);

        SurveyFilled::create([
            'user_id' => 1,
            'survey_id' => 3,
            'question_id' => 3,
            'option' => '0-100 miles'
        ]);
    }
}
