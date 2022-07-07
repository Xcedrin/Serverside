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
                    'Jan-Mar',
                    'Apr-Jun',
                    'Jul-Sep',
                    'Oct-Dec',
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'What is your preferred destination?',
                'options' => [
                    'United states',
                    'Americas',
                    'Europe',
                    'Australia',
                    'Europe',
                    'Asia',
                    'Africa'
                ]
            ],
        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'What is your planned budget for vacation?',
                'options' => [
                    '<$5k',
                    '$5k-$10k',
                    '$10k-$20k',
                    '>$20k',
                ]
            ],

        ]);

        Question::create([
            'survey_id' => 1,
            'question' => [
                'question' => 'How soon are you planning a vacation?',
                'options' => [
                    'Within a month',
                    '1-3 months',
                    '3-6 months',
                    '~ 6 months'
                ]
            ]
        ]);

        // breakfast survey questions
        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'Where do you prefer to have your breakfast?',
                'options' => [
                    'At home',
                    'In my transport',
                    'At work',
                    'I don’t like breakfast'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'On average how many days do you eat your breakfast?',
                'options' => [
                    '0',
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 2,
            'question' => [
                'question' => 'How often do you buy breakfast at Breakfast restaurants (McDonald\'s, Dunkin Donuts, etc)?',
                'options' => [
                    'Once a week',
                    '2-3 days a week',
                    'more than 3 days a week',
                ]
            ]
        ]);

        // transport questions
        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'How often do you use public transportation in a week?',
                'options' => [
                    '0',
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'How often do you use ride sharing services (Uber, OLA, etc) in a week?',
                'options' => [
                    '0',
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7'
                ]
            ]
        ]);

        Question::create([
            'survey_id' => 3,
            'question' => [
                'question' => 'On average, how many miles do you travel using Ride sharing, Public transportation in a week?',
                'options' => [
                    '0-100 miles',
                    '100-250 miles',
                    'Greater than 250 miles'
                ]
            ]
        ]);
    }
}
