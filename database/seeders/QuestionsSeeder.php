<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // vacation survey questions
        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'What is your most preferred time for vacation?',
                'options' => [
                    'A' => 'Jan-Mar',
                    'B' => 'Apr-Jun',
                    'C' => 'Jul-Sep',
                    'D' => 'Oct-Dec',
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'What is your preferred destination?',
                'options' => [
                    'A' => 'United states',
                    'B' => 'Americas',
                    'C' => 'Europe',
                    'D' => 'Australia',
                    'E' => 'Europe',
                    'F' => 'Asia',
                    'G' => 'Africa'
                ]
            ],
        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'What is your planned budget for vacation?',
                'options' => [
                    'A' => '<$5k',
                    'B' => '$5k-$10k',
                    'C' => '$10k-$20k',
                    'D' => '>$20k',
                ]
            ],

        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'How soon are you planning a vacation?',
                'options' => [
                    'A' => 'Within a month',
                    'B' => '1-3 months',
                    'C' => '3-6 months',
                    'D' => '~ 6 months'
                ]
            ]
        ]);

        // breakfast survey questions
        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'Where do you prefer to have your breakfast?',
                'options' => [
                    'A' => 'At home',
                    'B' => 'In my transport',
                    'C' => 'At work',
                    'D' => 'I don’t like breakfast'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'On average how many days do you eat your breakfast?',
                'options' => [
                    'A' => '0',
                    'B' => '1',
                    'C' => '2',
                    'D' => '3',
                    'E' => '4',
                    'F' => '5',
                    'G' => '6',
                    'H' => '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'How often do you buy breakfast at Breakfast restaurants (McDonald\'s, Dunkin Donuts, etc)?',
                'options' => [
                    'A' => 'Once a week',
                    'B' => '2-3 days a week',
                    'C' => 'more than 3 days a week',
                ]
            ]
        ]);

        // transport questions
        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'How often do you use public transportation in a week?',
                'options' => [
                    'A' => '0',
                    'B' => '1',
                    'C' => '2',
                    'D' => '3',
                    'E' => '4',
                    'F' => '5',
                    'G' => '6',
                    'H' => '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'How often do you use ride sharing services (Uber, OLA, etc) in a week?',
                'options' => [
                    'A' => '0',
                    'B' => '1',
                    'C' => '2',
                    'D' => '3',
                    'E' => '4',
                    'F' => '5',
                    'G' => '6',
                    'H' => '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'On average, how many miles do you travel using Ride sharing, Public transportation in a week?',
                'options' => [
                    'A' => '0-100 miles',
                    'B' => '100-250 miles',
                    'C' => 'Greater than 250 miles'
                ]
            ]
        ]);
    }
}
