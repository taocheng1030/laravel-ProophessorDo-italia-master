<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ScoringTableSeeder::class);
         $this->call(SATSubScoreSectionsSeeder::class);
         $this->call(SubScoresSeeder::class);
         $this->call(CrossTestSectionsSeeder::class);
         $this->call(CrossTestScoringTableSeeder::class);
    }
}
