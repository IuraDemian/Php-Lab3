<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournament;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tournament::create([
            'code' => '1',
            'full_name' => 'Міша',
            'gender' => 'чоловік',
            'age' => 20,
            'country' => 'Україна',
            'score_1' => 61,
            'score_2' => 23,
            'score_3' => 73,
        ]);
        Tournament::create([
            'code' => '2',
            'full_name' => 'Софія',
            'gender' => 'жінка',
            'age' => 24,
            'country' => 'Казахстан',
            'score_1' => 20,
            'score_2' => 85,
            'score_3' => 30,
        ]);
        Tournament::create([
            'code' => '3',
            'full_name' => 'Катя',
            'gender' => 'жінка',
            'age' => 30,
            'country' => 'Україна',
            'score_1' => 11,
            'score_2' => 25,
            'score_3' => 73,
        ]);
        Tournament::create([
            'code' => '4',
            'full_name' => 'Стас',
            'gender' => 'чоловік',
            'age' => 28,
            'country' => 'Польша',
            'score_1' => 72,
            'score_2' => 81,
            'score_3' => 98,
        ]);
        Tournament::create([
            'code' => '5',
            'full_name' => 'Петро',
            'gender' => 'чоловік',
            'age' => 27,
            'country' => 'Канада',
            'score_1' => 100,
            'score_2' => 100,
            'score_3' => 99,
        ]);
    }
}
