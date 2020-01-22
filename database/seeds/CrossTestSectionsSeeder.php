<?php

use Illuminate\Database\Seeder;

class CrossTestSectionsSeeder extends Seeder
{
    const TABLE = 'cross_test_sections';
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
                    "label" => "Analysis of History/Social Studies",
                    "created_at" => "2015-10-22 16:49:25",
                    "updated_at" => "2015-10-22 16:49:30",
                    "valid" => 1,
                    "deleted" => 0
                ],
                [
                    "id" => 2,
                    "label" => "Analysis of Science",
                    "created_at" => "2015-10-22 16:49:25",
                    "updated_at" => "2015-10-22 16:49:33",
                    "valid" => 1,
                    "deleted" => 0
                ]
            ]
        );
    }
}
