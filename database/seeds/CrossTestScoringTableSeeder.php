<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrossTestScoringTableSeeder extends Seeder
{
    const TABLE = 'cross_test_scoring_table';
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
                    0 =>
                        array (
                            'id' => 1,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    1 =>
                        array (
                            'id' => 2,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    2 =>
                        array (
                            'id' => 3,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 11,
                        ),
                    3 =>
                        array (
                            'id' => 4,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 12,
                        ),
                    4 =>
                        array (
                            'id' => 5,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    5 =>
                        array (
                            'id' => 6,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    6 =>
                        array (
                            'id' => 7,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    7 =>
                        array (
                            'id' => 8,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    8 =>
                        array (
                            'id' => 9,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    9 =>
                        array (
                            'id' => 10,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 20,
                        ),
                    10 =>
                        array (
                            'id' => 11,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 21,
                        ),
                    11 =>
                        array (
                            'id' => 12,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 22,
                        ),
                    12 =>
                        array (
                            'id' => 13,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 23,
                        ),
                    13 =>
                        array (
                            'id' => 14,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 24,
                        ),
                    14 =>
                        array (
                            'id' => 15,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 25,
                        ),
                    15 =>
                        array (
                            'id' => 16,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 26,
                        ),
                    16 =>
                        array (
                            'id' => 17,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 27,
                        ),
                    17 =>
                        array (
                            'id' => 18,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 28,
                        ),
                    18 =>
                        array (
                            'id' => 19,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 28,
                        ),
                    19 =>
                        array (
                            'id' => 20,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 29,
                        ),
                    20 =>
                        array (
                            'id' => 21,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 30,
                        ),
                    21 =>
                        array (
                            'id' => 22,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 30,
                        ),
                    22 =>
                        array (
                            'id' => 23,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 31,
                        ),
                    23 =>
                        array (
                            'id' => 24,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 32,
                        ),
                    24 =>
                        array (
                            'id' => 25,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 32,
                        ),
                    25 =>
                        array (
                            'id' => 26,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 33,
                        ),
                    26 =>
                        array (
                            'id' => 27,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 34,
                        ),
                    27 =>
                        array (
                            'id' => 28,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 35,
                        ),
                    28 =>
                        array (
                            'id' => 29,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 35,
                        ),
                    29 =>
                        array (
                            'id' => 30,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 36,
                        ),
                    30 =>
                        array (
                            'id' => 31,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 37,
                        ),
                    31 =>
                        array (
                            'id' => 32,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 38,
                        ),
                    32 =>
                        array (
                            'id' => 33,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 38,
                        ),
                    33 =>
                        array (
                            'id' => 34,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 39,
                        ),
                    34 =>
                        array (
                            'id' => 35,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 40,
                        ),
                    35 =>
                        array (
                            'id' => 36,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    36 =>
                        array (
                            'id' => 37,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    37 =>
                        array (
                            'id' => 38,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    38 =>
                        array (
                            'id' => 39,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    39 =>
                        array (
                            'id' => 40,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    40 =>
                        array (
                            'id' => 41,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    41 =>
                        array (
                            'id' => 42,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    42 =>
                        array (
                            'id' => 43,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    43 =>
                        array (
                            'id' => 44,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    44 =>
                        array (
                            'id' => 45,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    45 =>
                        array (
                            'id' => 46,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    46 =>
                        array (
                            'id' => 47,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    47 =>
                        array (
                            'id' => 48,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    48 =>
                        array (
                            'id' => 49,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    49 =>
                        array (
                            'id' => 50,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    50 =>
                        array (
                            'id' => 51,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    51 =>
                        array (
                            'id' => 52,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    52 =>
                        array (
                            'id' => 53,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    53 =>
                        array (
                            'id' => 54,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    54 =>
                        array (
                            'id' => 55,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    55 =>
                        array (
                            'id' => 56,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 27,
                        ),
                    56 =>
                        array (
                            'id' => 57,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    57 =>
                        array (
                            'id' => 58,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    58 =>
                        array (
                            'id' => 59,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    59 =>
                        array (
                            'id' => 60,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 30,
                        ),
                    60 =>
                        array (
                            'id' => 61,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    61 =>
                        array (
                            'id' => 62,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    62 =>
                        array (
                            'id' => 63,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 32,
                        ),
                    63 =>
                        array (
                            'id' => 64,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 33,
                        ),
                    64 =>
                        array (
                            'id' => 65,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    65 =>
                        array (
                            'id' => 66,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    66 =>
                        array (
                            'id' => 67,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    67 =>
                        array (
                            'id' => 68,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    68 =>
                        array (
                            'id' => 69,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    69 =>
                        array (
                            'id' => 70,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    70 =>
                        array (
                            'id' => 71,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    71 =>
                        array (
                            'id' => 72,
                            'sat_practice_test_id' => 1,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    72 =>
                        array (
                            'id' => 73,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    73 =>
                        array (
                            'id' => 74,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    74 =>
                        array (
                            'id' => 75,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 10,
                        ),
                    75 =>
                        array (
                            'id' => 76,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 12,
                        ),
                    76 =>
                        array (
                            'id' => 77,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 13,
                        ),
                    77 =>
                        array (
                            'id' => 78,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    78 =>
                        array (
                            'id' => 79,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    79 =>
                        array (
                            'id' => 80,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 16,
                        ),
                    80 =>
                        array (
                            'id' => 81,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 17,
                        ),
                    81 =>
                        array (
                            'id' => 82,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 18,
                        ),
                    82 =>
                        array (
                            'id' => 83,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    83 =>
                        array (
                            'id' => 84,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    84 =>
                        array (
                            'id' => 85,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    85 =>
                        array (
                            'id' => 86,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    86 =>
                        array (
                            'id' => 87,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    87 =>
                        array (
                            'id' => 88,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    88 =>
                        array (
                            'id' => 89,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    89 =>
                        array (
                            'id' => 90,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    90 =>
                        array (
                            'id' => 91,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    91 =>
                        array (
                            'id' => 92,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    92 =>
                        array (
                            'id' => 93,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    93 =>
                        array (
                            'id' => 94,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    94 =>
                        array (
                            'id' => 95,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    95 =>
                        array (
                            'id' => 96,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    96 =>
                        array (
                            'id' => 97,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    97 =>
                        array (
                            'id' => 98,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    98 =>
                        array (
                            'id' => 99,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    99 =>
                        array (
                            'id' => 100,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    100 =>
                        array (
                            'id' => 101,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    101 =>
                        array (
                            'id' => 102,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    102 =>
                        array (
                            'id' => 103,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    103 =>
                        array (
                            'id' => 104,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    104 =>
                        array (
                            'id' => 105,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    105 =>
                        array (
                            'id' => 106,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    106 =>
                        array (
                            'id' => 107,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    107 =>
                        array (
                            'id' => 108,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    108 =>
                        array (
                            'id' => 109,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    109 =>
                        array (
                            'id' => 110,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    110 =>
                        array (
                            'id' => 111,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    111 =>
                        array (
                            'id' => 112,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    112 =>
                        array (
                            'id' => 113,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    113 =>
                        array (
                            'id' => 114,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    114 =>
                        array (
                            'id' => 115,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    115 =>
                        array (
                            'id' => 116,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    116 =>
                        array (
                            'id' => 117,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    117 =>
                        array (
                            'id' => 118,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    118 =>
                        array (
                            'id' => 119,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    119 =>
                        array (
                            'id' => 120,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    120 =>
                        array (
                            'id' => 121,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    121 =>
                        array (
                            'id' => 122,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    122 =>
                        array (
                            'id' => 123,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 22,
                        ),
                    123 =>
                        array (
                            'id' => 124,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 23,
                        ),
                    124 =>
                        array (
                            'id' => 125,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    125 =>
                        array (
                            'id' => 126,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    126 =>
                        array (
                            'id' => 127,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    127 =>
                        array (
                            'id' => 128,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    128 =>
                        array (
                            'id' => 129,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    129 =>
                        array (
                            'id' => 130,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    130 =>
                        array (
                            'id' => 131,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    131 =>
                        array (
                            'id' => 132,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    132 =>
                        array (
                            'id' => 133,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    133 =>
                        array (
                            'id' => 134,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    134 =>
                        array (
                            'id' => 135,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    135 =>
                        array (
                            'id' => 136,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    136 =>
                        array (
                            'id' => 137,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    137 =>
                        array (
                            'id' => 138,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    138 =>
                        array (
                            'id' => 139,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    139 =>
                        array (
                            'id' => 140,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    140 =>
                        array (
                            'id' => 141,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    141 =>
                        array (
                            'id' => 142,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    142 =>
                        array (
                            'id' => 143,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    143 =>
                        array (
                            'id' => 144,
                            'sat_practice_test_id' => 2,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    144 =>
                        array (
                            'id' => 145,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    145 =>
                        array (
                            'id' => 146,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    146 =>
                        array (
                            'id' => 147,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 11,
                        ),
                    147 =>
                        array (
                            'id' => 148,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 12,
                        ),
                    148 =>
                        array (
                            'id' => 149,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    149 =>
                        array (
                            'id' => 150,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    150 =>
                        array (
                            'id' => 151,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    151 =>
                        array (
                            'id' => 152,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    152 =>
                        array (
                            'id' => 153,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    153 =>
                        array (
                            'id' => 154,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    154 =>
                        array (
                            'id' => 155,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    155 =>
                        array (
                            'id' => 156,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    156 =>
                        array (
                            'id' => 157,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    157 =>
                        array (
                            'id' => 158,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 23,
                        ),
                    158 =>
                        array (
                            'id' => 159,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 24,
                        ),
                    159 =>
                        array (
                            'id' => 160,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 25,
                        ),
                    160 =>
                        array (
                            'id' => 161,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 25,
                        ),
                    161 =>
                        array (
                            'id' => 162,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 26,
                        ),
                    162 =>
                        array (
                            'id' => 163,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 27,
                        ),
                    163 =>
                        array (
                            'id' => 164,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 28,
                        ),
                    164 =>
                        array (
                            'id' => 165,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 29,
                        ),
                    165 =>
                        array (
                            'id' => 166,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 29,
                        ),
                    166 =>
                        array (
                            'id' => 167,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 30,
                        ),
                    167 =>
                        array (
                            'id' => 168,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 30,
                        ),
                    168 =>
                        array (
                            'id' => 169,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 31,
                        ),
                    169 =>
                        array (
                            'id' => 170,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 32,
                        ),
                    170 =>
                        array (
                            'id' => 171,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 33,
                        ),
                    171 =>
                        array (
                            'id' => 172,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 33,
                        ),
                    172 =>
                        array (
                            'id' => 173,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 34,
                        ),
                    173 =>
                        array (
                            'id' => 174,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 35,
                        ),
                    174 =>
                        array (
                            'id' => 175,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 36,
                        ),
                    175 =>
                        array (
                            'id' => 176,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    176 =>
                        array (
                            'id' => 177,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    177 =>
                        array (
                            'id' => 178,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    178 =>
                        array (
                            'id' => 179,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    179 =>
                        array (
                            'id' => 180,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    180 =>
                        array (
                            'id' => 181,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    181 =>
                        array (
                            'id' => 182,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    182 =>
                        array (
                            'id' => 183,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    183 =>
                        array (
                            'id' => 184,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    184 =>
                        array (
                            'id' => 185,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    185 =>
                        array (
                            'id' => 186,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    186 =>
                        array (
                            'id' => 187,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    187 =>
                        array (
                            'id' => 188,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    188 =>
                        array (
                            'id' => 189,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    189 =>
                        array (
                            'id' => 190,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    190 =>
                        array (
                            'id' => 191,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    191 =>
                        array (
                            'id' => 192,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    192 =>
                        array (
                            'id' => 193,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    193 =>
                        array (
                            'id' => 194,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 23,
                        ),
                    194 =>
                        array (
                            'id' => 195,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    195 =>
                        array (
                            'id' => 196,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    196 =>
                        array (
                            'id' => 197,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 25,
                        ),
                    197 =>
                        array (
                            'id' => 198,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 26,
                        ),
                    198 =>
                        array (
                            'id' => 199,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 27,
                        ),
                    199 =>
                        array (
                            'id' => 200,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 27,
                        ),
                    200 =>
                        array (
                            'id' => 201,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 28,
                        ),
                    201 =>
                        array (
                            'id' => 202,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 29,
                        ),
                    202 =>
                        array (
                            'id' => 203,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    203 =>
                        array (
                            'id' => 204,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 30,
                        ),
                    204 =>
                        array (
                            'id' => 205,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 31,
                        ),
                    205 =>
                        array (
                            'id' => 206,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    206 =>
                        array (
                            'id' => 207,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 32,
                        ),
                    207 =>
                        array (
                            'id' => 208,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    208 =>
                        array (
                            'id' => 209,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    209 =>
                        array (
                            'id' => 210,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    210 =>
                        array (
                            'id' => 211,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    211 =>
                        array (
                            'id' => 212,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    212 =>
                        array (
                            'id' => 213,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    213 =>
                        array (
                            'id' => 214,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    214 =>
                        array (
                            'id' => 215,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    215 =>
                        array (
                            'id' => 216,
                            'sat_practice_test_id' => 3,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    216 =>
                        array (
                            'id' => 217,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    217 =>
                        array (
                            'id' => 218,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    218 =>
                        array (
                            'id' => 219,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 11,
                        ),
                    219 =>
                        array (
                            'id' => 220,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    220 =>
                        array (
                            'id' => 221,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 15,
                        ),
                    221 =>
                        array (
                            'id' => 222,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 16,
                        ),
                    222 =>
                        array (
                            'id' => 223,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 17,
                        ),
                    223 =>
                        array (
                            'id' => 224,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 18,
                        ),
                    224 =>
                        array (
                            'id' => 225,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 19,
                        ),
                    225 =>
                        array (
                            'id' => 226,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 20,
                        ),
                    226 =>
                        array (
                            'id' => 227,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 21,
                        ),
                    227 =>
                        array (
                            'id' => 228,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 22,
                        ),
                    228 =>
                        array (
                            'id' => 229,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 23,
                        ),
                    229 =>
                        array (
                            'id' => 230,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 24,
                        ),
                    230 =>
                        array (
                            'id' => 231,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 25,
                        ),
                    231 =>
                        array (
                            'id' => 232,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 26,
                        ),
                    232 =>
                        array (
                            'id' => 233,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 27,
                        ),
                    233 =>
                        array (
                            'id' => 234,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 28,
                        ),
                    234 =>
                        array (
                            'id' => 235,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 28,
                        ),
                    235 =>
                        array (
                            'id' => 236,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 29,
                        ),
                    236 =>
                        array (
                            'id' => 237,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 29,
                        ),
                    237 =>
                        array (
                            'id' => 238,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 30,
                        ),
                    238 =>
                        array (
                            'id' => 239,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 31,
                        ),
                    239 =>
                        array (
                            'id' => 240,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 31,
                        ),
                    240 =>
                        array (
                            'id' => 241,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 32,
                        ),
                    241 =>
                        array (
                            'id' => 242,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 33,
                        ),
                    242 =>
                        array (
                            'id' => 243,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 34,
                        ),
                    243 =>
                        array (
                            'id' => 244,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 34,
                        ),
                    244 =>
                        array (
                            'id' => 245,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 35,
                        ),
                    245 =>
                        array (
                            'id' => 246,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 36,
                        ),
                    246 =>
                        array (
                            'id' => 247,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 37,
                        ),
                    247 =>
                        array (
                            'id' => 248,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 38,
                        ),
                    248 =>
                        array (
                            'id' => 249,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 38,
                        ),
                    249 =>
                        array (
                            'id' => 250,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 39,
                        ),
                    250 =>
                        array (
                            'id' => 251,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 40,
                        ),
                    251 =>
                        array (
                            'id' => 252,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    252 =>
                        array (
                            'id' => 253,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    253 =>
                        array (
                            'id' => 254,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    254 =>
                        array (
                            'id' => 255,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 13,
                        ),
                    255 =>
                        array (
                            'id' => 256,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 14,
                        ),
                    256 =>
                        array (
                            'id' => 257,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 15,
                        ),
                    257 =>
                        array (
                            'id' => 258,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 16,
                        ),
                    258 =>
                        array (
                            'id' => 259,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 17,
                        ),
                    259 =>
                        array (
                            'id' => 260,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 18,
                        ),
                    260 =>
                        array (
                            'id' => 261,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    261 =>
                        array (
                            'id' => 262,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    262 =>
                        array (
                            'id' => 263,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    263 =>
                        array (
                            'id' => 264,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    264 =>
                        array (
                            'id' => 265,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    265 =>
                        array (
                            'id' => 266,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    266 =>
                        array (
                            'id' => 267,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    267 =>
                        array (
                            'id' => 268,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    268 =>
                        array (
                            'id' => 269,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    269 =>
                        array (
                            'id' => 270,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    270 =>
                        array (
                            'id' => 271,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    271 =>
                        array (
                            'id' => 272,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    272 =>
                        array (
                            'id' => 273,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    273 =>
                        array (
                            'id' => 274,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    274 =>
                        array (
                            'id' => 275,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 28,
                        ),
                    275 =>
                        array (
                            'id' => 276,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    276 =>
                        array (
                            'id' => 277,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    277 =>
                        array (
                            'id' => 278,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    278 =>
                        array (
                            'id' => 279,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    279 =>
                        array (
                            'id' => 280,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    280 =>
                        array (
                            'id' => 281,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    281 =>
                        array (
                            'id' => 282,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    282 =>
                        array (
                            'id' => 283,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    283 =>
                        array (
                            'id' => 284,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    284 =>
                        array (
                            'id' => 285,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    285 =>
                        array (
                            'id' => 286,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    286 =>
                        array (
                            'id' => 287,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    287 =>
                        array (
                            'id' => 288,
                            'sat_practice_test_id' => 4,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    288 =>
                        array (
                            'id' => 289,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    289 =>
                        array (
                            'id' => 290,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    290 =>
                        array (
                            'id' => 291,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 10,
                        ),
                    291 =>
                        array (
                            'id' => 292,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 11,
                        ),
                    292 =>
                        array (
                            'id' => 293,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 13,
                        ),
                    293 =>
                        array (
                            'id' => 294,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 14,
                        ),
                    294 =>
                        array (
                            'id' => 295,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 15,
                        ),
                    295 =>
                        array (
                            'id' => 296,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 16,
                        ),
                    296 =>
                        array (
                            'id' => 297,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 17,
                        ),
                    297 =>
                        array (
                            'id' => 298,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 18,
                        ),
                    298 =>
                        array (
                            'id' => 299,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    299 =>
                        array (
                            'id' => 300,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    300 =>
                        array (
                            'id' => 301,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    301 =>
                        array (
                            'id' => 302,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    302 =>
                        array (
                            'id' => 303,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    303 =>
                        array (
                            'id' => 304,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    304 =>
                        array (
                            'id' => 305,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    305 =>
                        array (
                            'id' => 306,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    306 =>
                        array (
                            'id' => 307,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    307 =>
                        array (
                            'id' => 308,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 27,
                        ),
                    308 =>
                        array (
                            'id' => 309,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    309 =>
                        array (
                            'id' => 310,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    310 =>
                        array (
                            'id' => 311,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    311 =>
                        array (
                            'id' => 312,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    312 =>
                        array (
                            'id' => 313,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    313 =>
                        array (
                            'id' => 314,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    314 =>
                        array (
                            'id' => 315,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    315 =>
                        array (
                            'id' => 316,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    316 =>
                        array (
                            'id' => 317,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    317 =>
                        array (
                            'id' => 318,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 33,
                        ),
                    318 =>
                        array (
                            'id' => 319,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    319 =>
                        array (
                            'id' => 320,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    320 =>
                        array (
                            'id' => 321,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    321 =>
                        array (
                            'id' => 322,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    322 =>
                        array (
                            'id' => 323,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    323 =>
                        array (
                            'id' => 324,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    324 =>
                        array (
                            'id' => 325,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    325 =>
                        array (
                            'id' => 326,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    326 =>
                        array (
                            'id' => 327,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    327 =>
                        array (
                            'id' => 328,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    328 =>
                        array (
                            'id' => 329,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    329 =>
                        array (
                            'id' => 330,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    330 =>
                        array (
                            'id' => 331,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    331 =>
                        array (
                            'id' => 332,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    332 =>
                        array (
                            'id' => 333,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    333 =>
                        array (
                            'id' => 334,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    334 =>
                        array (
                            'id' => 335,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    335 =>
                        array (
                            'id' => 336,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    336 =>
                        array (
                            'id' => 337,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    337 =>
                        array (
                            'id' => 338,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    338 =>
                        array (
                            'id' => 339,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    339 =>
                        array (
                            'id' => 340,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    340 =>
                        array (
                            'id' => 341,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    341 =>
                        array (
                            'id' => 342,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    342 =>
                        array (
                            'id' => 343,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    343 =>
                        array (
                            'id' => 344,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    344 =>
                        array (
                            'id' => 345,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    345 =>
                        array (
                            'id' => 346,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    346 =>
                        array (
                            'id' => 347,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 28,
                        ),
                    347 =>
                        array (
                            'id' => 348,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    348 =>
                        array (
                            'id' => 349,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    349 =>
                        array (
                            'id' => 350,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    350 =>
                        array (
                            'id' => 351,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    351 =>
                        array (
                            'id' => 352,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 31,
                        ),
                    352 =>
                        array (
                            'id' => 353,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 32,
                        ),
                    353 =>
                        array (
                            'id' => 354,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 33,
                        ),
                    354 =>
                        array (
                            'id' => 355,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    355 =>
                        array (
                            'id' => 356,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 34,
                        ),
                    356 =>
                        array (
                            'id' => 357,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 35,
                        ),
                    357 =>
                        array (
                            'id' => 358,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 36,
                        ),
                    358 =>
                        array (
                            'id' => 359,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    359 =>
                        array (
                            'id' => 360,
                            'sat_practice_test_id' => 5,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    360 =>
                        array (
                            'id' => 361,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    361 =>
                        array (
                            'id' => 362,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    362 =>
                        array (
                            'id' => 363,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 11,
                        ),
                    363 =>
                        array (
                            'id' => 364,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 12,
                        ),
                    364 =>
                        array (
                            'id' => 365,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 13,
                        ),
                    365 =>
                        array (
                            'id' => 366,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    366 =>
                        array (
                            'id' => 367,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    367 =>
                        array (
                            'id' => 368,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    368 =>
                        array (
                            'id' => 369,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    369 =>
                        array (
                            'id' => 370,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    370 =>
                        array (
                            'id' => 371,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 20,
                        ),
                    371 =>
                        array (
                            'id' => 372,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    372 =>
                        array (
                            'id' => 373,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    373 =>
                        array (
                            'id' => 374,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    374 =>
                        array (
                            'id' => 375,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    375 =>
                        array (
                            'id' => 376,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    376 =>
                        array (
                            'id' => 377,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 25,
                        ),
                    377 =>
                        array (
                            'id' => 378,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    378 =>
                        array (
                            'id' => 379,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    379 =>
                        array (
                            'id' => 380,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 27,
                        ),
                    380 =>
                        array (
                            'id' => 381,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    381 =>
                        array (
                            'id' => 382,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    382 =>
                        array (
                            'id' => 383,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    383 =>
                        array (
                            'id' => 384,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    384 =>
                        array (
                            'id' => 385,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    385 =>
                        array (
                            'id' => 386,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    386 =>
                        array (
                            'id' => 387,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    387 =>
                        array (
                            'id' => 388,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 32,
                        ),
                    388 =>
                        array (
                            'id' => 389,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    389 =>
                        array (
                            'id' => 390,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    390 =>
                        array (
                            'id' => 391,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    391 =>
                        array (
                            'id' => 392,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    392 =>
                        array (
                            'id' => 393,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    393 =>
                        array (
                            'id' => 394,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    394 =>
                        array (
                            'id' => 395,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    395 =>
                        array (
                            'id' => 396,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    396 =>
                        array (
                            'id' => 397,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    397 =>
                        array (
                            'id' => 398,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    398 =>
                        array (
                            'id' => 399,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    399 =>
                        array (
                            'id' => 400,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    400 =>
                        array (
                            'id' => 401,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    401 =>
                        array (
                            'id' => 402,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    402 =>
                        array (
                            'id' => 403,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    403 =>
                        array (
                            'id' => 404,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 17,
                        ),
                    404 =>
                        array (
                            'id' => 405,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 18,
                        ),
                    405 =>
                        array (
                            'id' => 406,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 19,
                        ),
                    406 =>
                        array (
                            'id' => 407,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    407 =>
                        array (
                            'id' => 408,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    408 =>
                        array (
                            'id' => 409,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    409 =>
                        array (
                            'id' => 410,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    410 =>
                        array (
                            'id' => 411,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 22,
                        ),
                    411 =>
                        array (
                            'id' => 412,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 23,
                        ),
                    412 =>
                        array (
                            'id' => 413,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    413 =>
                        array (
                            'id' => 414,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 24,
                        ),
                    414 =>
                        array (
                            'id' => 415,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 25,
                        ),
                    415 =>
                        array (
                            'id' => 416,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    416 =>
                        array (
                            'id' => 417,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 26,
                        ),
                    417 =>
                        array (
                            'id' => 418,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 27,
                        ),
                    418 =>
                        array (
                            'id' => 419,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 28,
                        ),
                    419 =>
                        array (
                            'id' => 420,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 28,
                        ),
                    420 =>
                        array (
                            'id' => 421,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 29,
                        ),
                    421 =>
                        array (
                            'id' => 422,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    422 =>
                        array (
                            'id' => 423,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    423 =>
                        array (
                            'id' => 424,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 31,
                        ),
                    424 =>
                        array (
                            'id' => 425,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 32,
                        ),
                    425 =>
                        array (
                            'id' => 426,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 33,
                        ),
                    426 =>
                        array (
                            'id' => 427,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    427 =>
                        array (
                            'id' => 428,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    428 =>
                        array (
                            'id' => 429,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    429 =>
                        array (
                            'id' => 430,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    430 =>
                        array (
                            'id' => 431,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    431 =>
                        array (
                            'id' => 432,
                            'sat_practice_test_id' => 6,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    432 =>
                        array (
                            'id' => 433,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    433 =>
                        array (
                            'id' => 434,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    434 =>
                        array (
                            'id' => 435,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 10,
                        ),
                    435 =>
                        array (
                            'id' => 436,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 12,
                        ),
                    436 =>
                        array (
                            'id' => 437,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 13,
                        ),
                    437 =>
                        array (
                            'id' => 438,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 14,
                        ),
                    438 =>
                        array (
                            'id' => 439,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 15,
                        ),
                    439 =>
                        array (
                            'id' => 440,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 16,
                        ),
                    440 =>
                        array (
                            'id' => 441,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 17,
                        ),
                    441 =>
                        array (
                            'id' => 442,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 18,
                        ),
                    442 =>
                        array (
                            'id' => 443,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    443 =>
                        array (
                            'id' => 444,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    444 =>
                        array (
                            'id' => 445,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    445 =>
                        array (
                            'id' => 446,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 22,
                        ),
                    446 =>
                        array (
                            'id' => 447,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    447 =>
                        array (
                            'id' => 448,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    448 =>
                        array (
                            'id' => 449,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    449 =>
                        array (
                            'id' => 450,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    450 =>
                        array (
                            'id' => 451,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 26,
                        ),
                    451 =>
                        array (
                            'id' => 452,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 27,
                        ),
                    452 =>
                        array (
                            'id' => 453,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    453 =>
                        array (
                            'id' => 454,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 28,
                        ),
                    454 =>
                        array (
                            'id' => 455,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    455 =>
                        array (
                            'id' => 456,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    456 =>
                        array (
                            'id' => 457,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 30,
                        ),
                    457 =>
                        array (
                            'id' => 458,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    458 =>
                        array (
                            'id' => 459,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 32,
                        ),
                    459 =>
                        array (
                            'id' => 460,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 33,
                        ),
                    460 =>
                        array (
                            'id' => 461,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 34,
                        ),
                    461 =>
                        array (
                            'id' => 462,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 35,
                        ),
                    462 =>
                        array (
                            'id' => 463,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    463 =>
                        array (
                            'id' => 464,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    464 =>
                        array (
                            'id' => 465,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    465 =>
                        array (
                            'id' => 466,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    466 =>
                        array (
                            'id' => 467,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    467 =>
                        array (
                            'id' => 468,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    468 =>
                        array (
                            'id' => 469,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    469 =>
                        array (
                            'id' => 470,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    470 =>
                        array (
                            'id' => 471,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    471 =>
                        array (
                            'id' => 472,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 13,
                        ),
                    472 =>
                        array (
                            'id' => 473,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 14,
                        ),
                    473 =>
                        array (
                            'id' => 474,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 15,
                        ),
                    474 =>
                        array (
                            'id' => 475,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 16,
                        ),
                    475 =>
                        array (
                            'id' => 476,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 16,
                        ),
                    476 =>
                        array (
                            'id' => 477,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 17,
                        ),
                    477 =>
                        array (
                            'id' => 478,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 18,
                        ),
                    478 =>
                        array (
                            'id' => 479,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    479 =>
                        array (
                            'id' => 480,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    480 =>
                        array (
                            'id' => 481,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 20,
                        ),
                    481 =>
                        array (
                            'id' => 482,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 21,
                        ),
                    482 =>
                        array (
                            'id' => 483,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 22,
                        ),
                    483 =>
                        array (
                            'id' => 484,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 23,
                        ),
                    484 =>
                        array (
                            'id' => 485,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 23,
                        ),
                    485 =>
                        array (
                            'id' => 486,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 24,
                        ),
                    486 =>
                        array (
                            'id' => 487,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 25,
                        ),
                    487 =>
                        array (
                            'id' => 488,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 25,
                        ),
                    488 =>
                        array (
                            'id' => 489,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 26,
                        ),
                    489 =>
                        array (
                            'id' => 490,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 27,
                        ),
                    490 =>
                        array (
                            'id' => 491,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 27,
                        ),
                    491 =>
                        array (
                            'id' => 492,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 28,
                        ),
                    492 =>
                        array (
                            'id' => 493,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 29,
                        ),
                    493 =>
                        array (
                            'id' => 494,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    494 =>
                        array (
                            'id' => 495,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 30,
                        ),
                    495 =>
                        array (
                            'id' => 496,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 31,
                        ),
                    496 =>
                        array (
                            'id' => 497,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 32,
                        ),
                    497 =>
                        array (
                            'id' => 498,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 33,
                        ),
                    498 =>
                        array (
                            'id' => 499,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    499 =>
                        array (
                            'id' => 500,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    500 =>
                        array (
                            'id' => 501,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    501 =>
                        array (
                            'id' => 502,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    502 =>
                        array (
                            'id' => 503,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    503 =>
                        array (
                            'id' => 504,
                            'sat_practice_test_id' => 7,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    504 =>
                        array (
                            'id' => 505,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    505 =>
                        array (
                            'id' => 506,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    506 =>
                        array (
                            'id' => 507,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 10,
                        ),
                    507 =>
                        array (
                            'id' => 508,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 11,
                        ),
                    508 =>
                        array (
                            'id' => 509,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 12,
                        ),
                    509 =>
                        array (
                            'id' => 510,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 13,
                        ),
                    510 =>
                        array (
                            'id' => 511,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 14,
                        ),
                    511 =>
                        array (
                            'id' => 512,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 15,
                        ),
                    512 =>
                        array (
                            'id' => 513,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 16,
                        ),
                    513 =>
                        array (
                            'id' => 514,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 17,
                        ),
                    514 =>
                        array (
                            'id' => 515,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    515 =>
                        array (
                            'id' => 516,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 20,
                        ),
                    516 =>
                        array (
                            'id' => 517,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 21,
                        ),
                    517 =>
                        array (
                            'id' => 518,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 21,
                        ),
                    518 =>
                        array (
                            'id' => 519,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 22,
                        ),
                    519 =>
                        array (
                            'id' => 520,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 23,
                        ),
                    520 =>
                        array (
                            'id' => 521,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 24,
                        ),
                    521 =>
                        array (
                            'id' => 522,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 25,
                        ),
                    522 =>
                        array (
                            'id' => 523,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 25,
                        ),
                    523 =>
                        array (
                            'id' => 524,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 26,
                        ),
                    524 =>
                        array (
                            'id' => 525,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 27,
                        ),
                    525 =>
                        array (
                            'id' => 526,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 27,
                        ),
                    526 =>
                        array (
                            'id' => 527,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 28,
                        ),
                    527 =>
                        array (
                            'id' => 528,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 29,
                        ),
                    528 =>
                        array (
                            'id' => 529,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 29,
                        ),
                    529 =>
                        array (
                            'id' => 530,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 30,
                        ),
                    530 =>
                        array (
                            'id' => 531,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 31,
                        ),
                    531 =>
                        array (
                            'id' => 532,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 31,
                        ),
                    532 =>
                        array (
                            'id' => 533,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 32,
                        ),
                    533 =>
                        array (
                            'id' => 534,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 33,
                        ),
                    534 =>
                        array (
                            'id' => 535,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 34,
                        ),
                    535 =>
                        array (
                            'id' => 536,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    536 =>
                        array (
                            'id' => 537,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    537 =>
                        array (
                            'id' => 538,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    538 =>
                        array (
                            'id' => 539,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    539 =>
                        array (
                            'id' => 540,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    540 =>
                        array (
                            'id' => 541,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    541 =>
                        array (
                            'id' => 542,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    542 =>
                        array (
                            'id' => 543,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    543 =>
                        array (
                            'id' => 544,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 14,
                        ),
                    544 =>
                        array (
                            'id' => 545,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 15,
                        ),
                    545 =>
                        array (
                            'id' => 546,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 16,
                        ),
                    546 =>
                        array (
                            'id' => 547,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 17,
                        ),
                    547 =>
                        array (
                            'id' => 548,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 18,
                        ),
                    548 =>
                        array (
                            'id' => 549,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 19,
                        ),
                    549 =>
                        array (
                            'id' => 550,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 20,
                        ),
                    550 =>
                        array (
                            'id' => 551,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 21,
                        ),
                    551 =>
                        array (
                            'id' => 552,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    552 =>
                        array (
                            'id' => 553,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    553 =>
                        array (
                            'id' => 554,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 23,
                        ),
                    554 =>
                        array (
                            'id' => 555,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 24,
                        ),
                    555 =>
                        array (
                            'id' => 556,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 25,
                        ),
                    556 =>
                        array (
                            'id' => 557,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 25,
                        ),
                    557 =>
                        array (
                            'id' => 558,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 26,
                        ),
                    558 =>
                        array (
                            'id' => 559,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 27,
                        ),
                    559 =>
                        array (
                            'id' => 560,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 28,
                        ),
                    560 =>
                        array (
                            'id' => 561,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 28,
                        ),
                    561 =>
                        array (
                            'id' => 562,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 29,
                        ),
                    562 =>
                        array (
                            'id' => 563,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 30,
                        ),
                    563 =>
                        array (
                            'id' => 564,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 30,
                        ),
                    564 =>
                        array (
                            'id' => 565,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 31,
                        ),
                    565 =>
                        array (
                            'id' => 566,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    566 =>
                        array (
                            'id' => 567,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 32,
                        ),
                    567 =>
                        array (
                            'id' => 568,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 33,
                        ),
                    568 =>
                        array (
                            'id' => 569,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    569 =>
                        array (
                            'id' => 570,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    570 =>
                        array (
                            'id' => 571,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    571 =>
                        array (
                            'id' => 572,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 36,
                        ),
                    572 =>
                        array (
                            'id' => 573,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 37,
                        ),
                    573 =>
                        array (
                            'id' => 574,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 38,
                        ),
                    574 =>
                        array (
                            'id' => 575,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 39,
                        ),
                    575 =>
                        array (
                            'id' => 576,
                            'sat_practice_test_id' => 8,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    576 =>
                        array (
                            'id' => 577,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    577 =>
                        array (
                            'id' => 578,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 1,
                            'score' => 10,
                        ),
                    578 =>
                        array (
                            'id' => 579,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 2,
                            'score' => 10,
                        ),
                    579 =>
                        array (
                            'id' => 580,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 3,
                            'score' => 11,
                        ),
                    580 =>
                        array (
                            'id' => 581,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 4,
                            'score' => 13,
                        ),
                    581 =>
                        array (
                            'id' => 582,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 5,
                            'score' => 14,
                        ),
                    582 =>
                        array (
                            'id' => 583,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 6,
                            'score' => 15,
                        ),
                    583 =>
                        array (
                            'id' => 584,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 7,
                            'score' => 16,
                        ),
                    584 =>
                        array (
                            'id' => 585,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 8,
                            'score' => 17,
                        ),
                    585 =>
                        array (
                            'id' => 586,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 9,
                            'score' => 18,
                        ),
                    586 =>
                        array (
                            'id' => 587,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 10,
                            'score' => 19,
                        ),
                    587 =>
                        array (
                            'id' => 588,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 11,
                            'score' => 21,
                        ),
                    588 =>
                        array (
                            'id' => 589,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    589 =>
                        array (
                            'id' => 590,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 13,
                            'score' => 23,
                        ),
                    590 =>
                        array (
                            'id' => 591,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 14,
                            'score' => 23,
                        ),
                    591 =>
                        array (
                            'id' => 592,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 15,
                            'score' => 24,
                        ),
                    592 =>
                        array (
                            'id' => 593,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 16,
                            'score' => 25,
                        ),
                    593 =>
                        array (
                            'id' => 594,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 17,
                            'score' => 26,
                        ),
                    594 =>
                        array (
                            'id' => 595,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 18,
                            'score' => 27,
                        ),
                    595 =>
                        array (
                            'id' => 596,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 19,
                            'score' => 28,
                        ),
                    596 =>
                        array (
                            'id' => 597,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 20,
                            'score' => 28,
                        ),
                    597 =>
                        array (
                            'id' => 598,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 21,
                            'score' => 29,
                        ),
                    598 =>
                        array (
                            'id' => 599,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 22,
                            'score' => 29,
                        ),
                    599 =>
                        array (
                            'id' => 600,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 23,
                            'score' => 30,
                        ),
                    600 =>
                        array (
                            'id' => 601,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 24,
                            'score' => 31,
                        ),
                    601 =>
                        array (
                            'id' => 602,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 25,
                            'score' => 31,
                        ),
                    602 =>
                        array (
                            'id' => 603,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 26,
                            'score' => 32,
                        ),
                    603 =>
                        array (
                            'id' => 604,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 27,
                            'score' => 33,
                        ),
                    604 =>
                        array (
                            'id' => 605,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 28,
                            'score' => 33,
                        ),
                    605 =>
                        array (
                            'id' => 606,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 29,
                            'score' => 34,
                        ),
                    606 =>
                        array (
                            'id' => 607,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 30,
                            'score' => 35,
                        ),
                    607 =>
                        array (
                            'id' => 608,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 31,
                            'score' => 35,
                        ),
                    608 =>
                        array (
                            'id' => 609,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 32,
                            'score' => 36,
                        ),
                    609 =>
                        array (
                            'id' => 610,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 33,
                            'score' => 37,
                        ),
                    610 =>
                        array (
                            'id' => 611,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 34,
                            'score' => 38,
                        ),
                    611 =>
                        array (
                            'id' => 612,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 1,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
                    612 =>
                        array (
                            'id' => 613,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 0,
                            'score' => 10,
                        ),
                    613 =>
                        array (
                            'id' => 614,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 1,
                            'score' => 11,
                        ),
                    614 =>
                        array (
                            'id' => 615,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 2,
                            'score' => 12,
                        ),
                    615 =>
                        array (
                            'id' => 616,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 3,
                            'score' => 14,
                        ),
                    616 =>
                        array (
                            'id' => 617,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 4,
                            'score' => 15,
                        ),
                    617 =>
                        array (
                            'id' => 618,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 5,
                            'score' => 16,
                        ),
                    618 =>
                        array (
                            'id' => 619,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 6,
                            'score' => 17,
                        ),
                    619 =>
                        array (
                            'id' => 620,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 7,
                            'score' => 18,
                        ),
                    620 =>
                        array (
                            'id' => 621,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 8,
                            'score' => 19,
                        ),
                    621 =>
                        array (
                            'id' => 622,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 9,
                            'score' => 20,
                        ),
                    622 =>
                        array (
                            'id' => 623,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 10,
                            'score' => 21,
                        ),
                    623 =>
                        array (
                            'id' => 624,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 11,
                            'score' => 22,
                        ),
                    624 =>
                        array (
                            'id' => 625,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 12,
                            'score' => 22,
                        ),
                    625 =>
                        array (
                            'id' => 626,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 13,
                            'score' => 23,
                        ),
                    626 =>
                        array (
                            'id' => 627,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 14,
                            'score' => 24,
                        ),
                    627 =>
                        array (
                            'id' => 628,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 15,
                            'score' => 25,
                        ),
                    628 =>
                        array (
                            'id' => 629,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 16,
                            'score' => 26,
                        ),
                    629 =>
                        array (
                            'id' => 630,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 17,
                            'score' => 27,
                        ),
                    630 =>
                        array (
                            'id' => 631,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 18,
                            'score' => 27,
                        ),
                    631 =>
                        array (
                            'id' => 632,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 19,
                            'score' => 28,
                        ),
                    632 =>
                        array (
                            'id' => 633,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 20,
                            'score' => 29,
                        ),
                    633 =>
                        array (
                            'id' => 634,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 21,
                            'score' => 30,
                        ),
                    634 =>
                        array (
                            'id' => 635,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 22,
                            'score' => 30,
                        ),
                    635 =>
                        array (
                            'id' => 636,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 23,
                            'score' => 31,
                        ),
                    636 =>
                        array (
                            'id' => 637,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 24,
                            'score' => 32,
                        ),
                    637 =>
                        array (
                            'id' => 638,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 25,
                            'score' => 32,
                        ),
                    638 =>
                        array (
                            'id' => 639,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 26,
                            'score' => 33,
                        ),
                    639 =>
                        array (
                            'id' => 640,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 27,
                            'score' => 34,
                        ),
                    640 =>
                        array (
                            'id' => 641,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 28,
                            'score' => 34,
                        ),
                    641 =>
                        array (
                            'id' => 642,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 29,
                            'score' => 35,
                        ),
                    642 =>
                        array (
                            'id' => 643,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 30,
                            'score' => 36,
                        ),
                    643 =>
                        array (
                            'id' => 644,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 31,
                            'score' => 37,
                        ),
                    644 =>
                        array (
                            'id' => 645,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 32,
                            'score' => 38,
                        ),
                    645 =>
                        array (
                            'id' => 646,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 33,
                            'score' => 39,
                        ),
                    646 =>
                        array (
                            'id' => 647,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 34,
                            'score' => 40,
                        ),
                    647 =>
                        array (
                            'id' => 648,
                            'sat_practice_test_id' => 15,
                            'cross_test_section_id' => 2,
                            'raw_score' => 35,
                            'score' => 40,
                        ),
            ]
        );
    }
}
