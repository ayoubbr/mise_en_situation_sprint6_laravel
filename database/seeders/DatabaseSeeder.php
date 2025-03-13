<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $team = Team::create([
            'name' => 'liverpool',
            'city' => 'liverpool',
            'country' => 'england',
            'date_founded' => '1900'
        ]);

        Player::create([
            'fname' => 'mohamed',
            'lname' => 'salah',
            'age' => 30,
            'height' => 1.70,
            'foot' => 'left',
            'team_id' => $team->id
        ]);
    }
}
