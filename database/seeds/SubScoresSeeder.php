<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubScoresSeeder extends Seeder
{
    const TABLE = 'sat_sub_score_sections';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->truncate();

        DB::table(self::TABLE)->insert(
            [
                [
                    "id" => 1,
                    "label" => "Heart of Algebra",
                    "created_at" => "2015-10-22 16:47:05",
                    "updated_at" => "2015-10-22 16:47:11",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 2,
                    "label" => "Problem Solving and Data Analysis",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:12",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 3,
                    "label" => "Passport to Advanced Math",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:12",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 4,
                    "label" => "Expression of Ideas",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:13",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 5,
                    "label" => "Standard English Conventions",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:13",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 6,
                    "label" => "Words in Context",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:14",
                    "valid" => 0,
                    "deleted" => 0
                ],
                [
                    "id" => 7,
                    "label" => "Command of Evidence",
                    "created" => "2015-10-22 16:47:05",
                    "updated" => "2015-10-22 16:47:15",
                    "valid" => 0,
                    "deleted" => 0
                ]
            ]
        );
    }
}
