<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SATSubScoreSectionsSeeder extends Seeder
{
    const TABLE = 'sat_sub_scores_scoring_table';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(self::TABLE)->truncate();
        DB::table(self::TABLE)->insert(
            array (
                        0 =>
                            array (
                                'id' => 1,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1 =>
                            array (
                                'id' => 2,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        2 =>
                            array (
                                'id' => 3,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        3 =>
                            array (
                                'id' => 4,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        4 =>
                            array (
                                'id' => 5,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        5 =>
                            array (
                                'id' => 6,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        6 =>
                            array (
                                'id' => 7,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        7 =>
                            array (
                                'id' => 8,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        8 =>
                            array (
                                'id' => 9,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        9 =>
                            array (
                                'id' => 10,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        10 =>
                            array (
                                'id' => 11,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        11 =>
                            array (
                                'id' => 12,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        12 =>
                            array (
                                'id' => 13,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        13 =>
                            array (
                                'id' => 14,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        14 =>
                            array (
                                'id' => 15,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        15 =>
                            array (
                                'id' => 16,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        16 =>
                            array (
                                'id' => 17,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        17 =>
                            array (
                                'id' => 18,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        18 =>
                            array (
                                'id' => 19,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        19 =>
                            array (
                                'id' => 20,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        20 =>
                            array (
                                'id' => 21,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        21 =>
                            array (
                                'id' => 22,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        22 =>
                            array (
                                'id' => 23,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        23 =>
                            array (
                                'id' => 24,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        24 =>
                            array (
                                'id' => 25,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        25 =>
                            array (
                                'id' => 26,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        26 =>
                            array (
                                'id' => 27,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        27 =>
                            array (
                                'id' => 28,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        28 =>
                            array (
                                'id' => 29,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        29 =>
                            array (
                                'id' => 30,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        30 =>
                            array (
                                'id' => 31,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        31 =>
                            array (
                                'id' => 32,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        32 =>
                            array (
                                'id' => 33,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        33 =>
                            array (
                                'id' => 34,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        34 =>
                            array (
                                'id' => 35,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        35 =>
                            array (
                                'id' => 36,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        36 =>
                            array (
                                'id' => 37,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        37 =>
                            array (
                                'id' => 38,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        38 =>
                            array (
                                'id' => 39,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        39 =>
                            array (
                                'id' => 40,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        40 =>
                            array (
                                'id' => 41,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 5,
                            ),
                        41 =>
                            array (
                                'id' => 42,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 6,
                            ),
                        42 =>
                            array (
                                'id' => 43,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 7,
                            ),
                        43 =>
                            array (
                                'id' => 44,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 8,
                            ),
                        44 =>
                            array (
                                'id' => 45,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 9,
                            ),
                        45 =>
                            array (
                                'id' => 46,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 10,
                            ),
                        46 =>
                            array (
                                'id' => 47,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 11,
                            ),
                        47 =>
                            array (
                                'id' => 48,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 11,
                            ),
                        48 =>
                            array (
                                'id' => 49,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 12,
                            ),
                        49 =>
                            array (
                                'id' => 50,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 12,
                            ),
                        50 =>
                            array (
                                'id' => 51,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 13,
                            ),
                        51 =>
                            array (
                                'id' => 52,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        52 =>
                            array (
                                'id' => 53,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        53 =>
                            array (
                                'id' => 54,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        54 =>
                            array (
                                'id' => 55,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        55 =>
                            array (
                                'id' => 56,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        56 =>
                            array (
                                'id' => 57,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        57 =>
                            array (
                                'id' => 58,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        58 =>
                            array (
                                'id' => 59,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        59 =>
                            array (
                                'id' => 60,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        60 =>
                            array (
                                'id' => 61,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        61 =>
                            array (
                                'id' => 62,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        62 =>
                            array (
                                'id' => 63,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        63 =>
                            array (
                                'id' => 64,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        64 =>
                            array (
                                'id' => 65,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        65 =>
                            array (
                                'id' => 66,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        66 =>
                            array (
                                'id' => 67,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        67 =>
                            array (
                                'id' => 68,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        68 =>
                            array (
                                'id' => 69,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        69 =>
                            array (
                                'id' => 70,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        70 =>
                            array (
                                'id' => 71,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        71 =>
                            array (
                                'id' => 72,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        72 =>
                            array (
                                'id' => 73,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        73 =>
                            array (
                                'id' => 74,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 11,
                            ),
                        74 =>
                            array (
                                'id' => 75,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        75 =>
                            array (
                                'id' => 76,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 12,
                            ),
                        76 =>
                            array (
                                'id' => 77,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        77 =>
                            array (
                                'id' => 78,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        78 =>
                            array (
                                'id' => 79,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 14,
                            ),
                        79 =>
                            array (
                                'id' => 80,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        80 =>
                            array (
                                'id' => 81,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        81 =>
                            array (
                                'id' => 82,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        82 =>
                            array (
                                'id' => 83,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        83 =>
                            array (
                                'id' => 84,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        84 =>
                            array (
                                'id' => 85,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        85 =>
                            array (
                                'id' => 86,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        86 =>
                            array (
                                'id' => 87,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        87 =>
                            array (
                                'id' => 88,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        88 =>
                            array (
                                'id' => 89,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        89 =>
                            array (
                                'id' => 90,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        90 =>
                            array (
                                'id' => 91,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        91 =>
                            array (
                                'id' => 92,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        92 =>
                            array (
                                'id' => 93,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        93 =>
                            array (
                                'id' => 94,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 8,
                            ),
                        94 =>
                            array (
                                'id' => 95,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        95 =>
                            array (
                                'id' => 96,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        96 =>
                            array (
                                'id' => 97,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        97 =>
                            array (
                                'id' => 98,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        98 =>
                            array (
                                'id' => 99,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        99 =>
                            array (
                                'id' => 100,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 13,
                            ),
                        100 =>
                            array (
                                'id' => 101,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        101 =>
                            array (
                                'id' => 102,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        102 =>
                            array (
                                'id' => 103,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        103 =>
                            array (
                                'id' => 104,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        104 =>
                            array (
                                'id' => 105,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        105 =>
                            array (
                                'id' => 106,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        106 =>
                            array (
                                'id' => 107,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        107 =>
                            array (
                                'id' => 108,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        108 =>
                            array (
                                'id' => 109,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        109 =>
                            array (
                                'id' => 110,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        110 =>
                            array (
                                'id' => 111,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        111 =>
                            array (
                                'id' => 112,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        112 =>
                            array (
                                'id' => 113,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        113 =>
                            array (
                                'id' => 114,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        114 =>
                            array (
                                'id' => 115,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        115 =>
                            array (
                                'id' => 116,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        116 =>
                            array (
                                'id' => 117,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        117 =>
                            array (
                                'id' => 118,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        118 =>
                            array (
                                'id' => 119,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        119 =>
                            array (
                                'id' => 120,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        120 =>
                            array (
                                'id' => 121,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        121 =>
                            array (
                                'id' => 122,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        122 =>
                            array (
                                'id' => 123,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        123 =>
                            array (
                                'id' => 124,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        124 =>
                            array (
                                'id' => 125,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        125 =>
                            array (
                                'id' => 126,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        126 =>
                            array (
                                'id' => 127,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        127 =>
                            array (
                                'id' => 128,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        128 =>
                            array (
                                'id' => 129,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        129 =>
                            array (
                                'id' => 130,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        130 =>
                            array (
                                'id' => 131,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        131 =>
                            array (
                                'id' => 132,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        132 =>
                            array (
                                'id' => 133,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        133 =>
                            array (
                                'id' => 134,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        134 =>
                            array (
                                'id' => 135,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        135 =>
                            array (
                                'id' => 136,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        136 =>
                            array (
                                'id' => 137,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        137 =>
                            array (
                                'id' => 138,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        138 =>
                            array (
                                'id' => 139,
                                'practice_test_id' => 1,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        139 =>
                            array (
                                'id' => 140,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        140 =>
                            array (
                                'id' => 141,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        141 =>
                            array (
                                'id' => 142,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        142 =>
                            array (
                                'id' => 143,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        143 =>
                            array (
                                'id' => 144,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        144 =>
                            array (
                                'id' => 145,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        145 =>
                            array (
                                'id' => 146,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        146 =>
                            array (
                                'id' => 147,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        147 =>
                            array (
                                'id' => 148,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        148 =>
                            array (
                                'id' => 149,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        149 =>
                            array (
                                'id' => 150,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        150 =>
                            array (
                                'id' => 151,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        151 =>
                            array (
                                'id' => 152,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        152 =>
                            array (
                                'id' => 153,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        153 =>
                            array (
                                'id' => 154,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        154 =>
                            array (
                                'id' => 155,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        155 =>
                            array (
                                'id' => 156,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        156 =>
                            array (
                                'id' => 157,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        157 =>
                            array (
                                'id' => 158,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        158 =>
                            array (
                                'id' => 159,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        159 =>
                            array (
                                'id' => 160,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        160 =>
                            array (
                                'id' => 161,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        161 =>
                            array (
                                'id' => 162,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        162 =>
                            array (
                                'id' => 163,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        163 =>
                            array (
                                'id' => 164,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        164 =>
                            array (
                                'id' => 165,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        165 =>
                            array (
                                'id' => 166,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        166 =>
                            array (
                                'id' => 167,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        167 =>
                            array (
                                'id' => 168,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        168 =>
                            array (
                                'id' => 169,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        169 =>
                            array (
                                'id' => 170,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        170 =>
                            array (
                                'id' => 171,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        171 =>
                            array (
                                'id' => 172,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        172 =>
                            array (
                                'id' => 173,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        173 =>
                            array (
                                'id' => 174,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        174 =>
                            array (
                                'id' => 175,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        175 =>
                            array (
                                'id' => 176,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        176 =>
                            array (
                                'id' => 177,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        177 =>
                            array (
                                'id' => 178,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        178 =>
                            array (
                                'id' => 179,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        179 =>
                            array (
                                'id' => 180,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 5,
                            ),
                        180 =>
                            array (
                                'id' => 181,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 6,
                            ),
                        181 =>
                            array (
                                'id' => 182,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 7,
                            ),
                        182 =>
                            array (
                                'id' => 183,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 8,
                            ),
                        183 =>
                            array (
                                'id' => 184,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 9,
                            ),
                        184 =>
                            array (
                                'id' => 185,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 10,
                            ),
                        185 =>
                            array (
                                'id' => 186,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 11,
                            ),
                        186 =>
                            array (
                                'id' => 187,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 11,
                            ),
                        187 =>
                            array (
                                'id' => 188,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 12,
                            ),
                        188 =>
                            array (
                                'id' => 189,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 12,
                            ),
                        189 =>
                            array (
                                'id' => 190,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 13,
                            ),
                        190 =>
                            array (
                                'id' => 191,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        191 =>
                            array (
                                'id' => 192,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        192 =>
                            array (
                                'id' => 193,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        193 =>
                            array (
                                'id' => 194,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        194 =>
                            array (
                                'id' => 195,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        195 =>
                            array (
                                'id' => 196,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        196 =>
                            array (
                                'id' => 197,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        197 =>
                            array (
                                'id' => 198,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        198 =>
                            array (
                                'id' => 199,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        199 =>
                            array (
                                'id' => 200,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        200 =>
                            array (
                                'id' => 201,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        201 =>
                            array (
                                'id' => 202,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        202 =>
                            array (
                                'id' => 203,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        203 =>
                            array (
                                'id' => 204,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        204 =>
                            array (
                                'id' => 205,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        205 =>
                            array (
                                'id' => 206,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        206 =>
                            array (
                                'id' => 207,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        207 =>
                            array (
                                'id' => 208,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        208 =>
                            array (
                                'id' => 209,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        209 =>
                            array (
                                'id' => 210,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        210 =>
                            array (
                                'id' => 211,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        211 =>
                            array (
                                'id' => 212,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        212 =>
                            array (
                                'id' => 213,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 11,
                            ),
                        213 =>
                            array (
                                'id' => 214,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        214 =>
                            array (
                                'id' => 215,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 12,
                            ),
                        215 =>
                            array (
                                'id' => 216,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        216 =>
                            array (
                                'id' => 217,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        217 =>
                            array (
                                'id' => 218,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 14,
                            ),
                        218 =>
                            array (
                                'id' => 219,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        219 =>
                            array (
                                'id' => 220,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        220 =>
                            array (
                                'id' => 221,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        221 =>
                            array (
                                'id' => 222,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        222 =>
                            array (
                                'id' => 223,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        223 =>
                            array (
                                'id' => 224,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        224 =>
                            array (
                                'id' => 225,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        225 =>
                            array (
                                'id' => 226,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        226 =>
                            array (
                                'id' => 227,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        227 =>
                            array (
                                'id' => 228,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        228 =>
                            array (
                                'id' => 229,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        229 =>
                            array (
                                'id' => 230,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        230 =>
                            array (
                                'id' => 231,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        231 =>
                            array (
                                'id' => 232,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        232 =>
                            array (
                                'id' => 233,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 8,
                            ),
                        233 =>
                            array (
                                'id' => 234,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        234 =>
                            array (
                                'id' => 235,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        235 =>
                            array (
                                'id' => 236,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        236 =>
                            array (
                                'id' => 237,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        237 =>
                            array (
                                'id' => 238,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        238 =>
                            array (
                                'id' => 239,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 13,
                            ),
                        239 =>
                            array (
                                'id' => 240,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        240 =>
                            array (
                                'id' => 241,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        241 =>
                            array (
                                'id' => 242,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        242 =>
                            array (
                                'id' => 243,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        243 =>
                            array (
                                'id' => 244,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        244 =>
                            array (
                                'id' => 245,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        245 =>
                            array (
                                'id' => 246,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        246 =>
                            array (
                                'id' => 247,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        247 =>
                            array (
                                'id' => 248,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        248 =>
                            array (
                                'id' => 249,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        249 =>
                            array (
                                'id' => 250,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        250 =>
                            array (
                                'id' => 251,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        251 =>
                            array (
                                'id' => 252,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        252 =>
                            array (
                                'id' => 253,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        253 =>
                            array (
                                'id' => 254,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        254 =>
                            array (
                                'id' => 255,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        255 =>
                            array (
                                'id' => 256,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        256 =>
                            array (
                                'id' => 257,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        257 =>
                            array (
                                'id' => 258,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        258 =>
                            array (
                                'id' => 259,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        259 =>
                            array (
                                'id' => 260,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        260 =>
                            array (
                                'id' => 261,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        261 =>
                            array (
                                'id' => 262,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        262 =>
                            array (
                                'id' => 263,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        263 =>
                            array (
                                'id' => 264,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        264 =>
                            array (
                                'id' => 265,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        265 =>
                            array (
                                'id' => 266,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        266 =>
                            array (
                                'id' => 267,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        267 =>
                            array (
                                'id' => 268,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        268 =>
                            array (
                                'id' => 269,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        269 =>
                            array (
                                'id' => 270,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        270 =>
                            array (
                                'id' => 271,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        271 =>
                            array (
                                'id' => 272,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        272 =>
                            array (
                                'id' => 273,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        273 =>
                            array (
                                'id' => 274,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        274 =>
                            array (
                                'id' => 275,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        275 =>
                            array (
                                'id' => 276,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        276 =>
                            array (
                                'id' => 277,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        277 =>
                            array (
                                'id' => 278,
                                'practice_test_id' => 2,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        278 =>
                            array (
                                'id' => 279,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        279 =>
                            array (
                                'id' => 280,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        280 =>
                            array (
                                'id' => 281,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        281 =>
                            array (
                                'id' => 282,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        282 =>
                            array (
                                'id' => 283,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        283 =>
                            array (
                                'id' => 284,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        284 =>
                            array (
                                'id' => 285,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        285 =>
                            array (
                                'id' => 286,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        286 =>
                            array (
                                'id' => 287,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        287 =>
                            array (
                                'id' => 288,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        288 =>
                            array (
                                'id' => 289,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        289 =>
                            array (
                                'id' => 290,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        290 =>
                            array (
                                'id' => 291,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        291 =>
                            array (
                                'id' => 292,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        292 =>
                            array (
                                'id' => 293,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        293 =>
                            array (
                                'id' => 294,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        294 =>
                            array (
                                'id' => 295,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        295 =>
                            array (
                                'id' => 296,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        296 =>
                            array (
                                'id' => 297,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        297 =>
                            array (
                                'id' => 298,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        298 =>
                            array (
                                'id' => 299,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        299 =>
                            array (
                                'id' => 300,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        300 =>
                            array (
                                'id' => 301,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        301 =>
                            array (
                                'id' => 302,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        302 =>
                            array (
                                'id' => 303,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        303 =>
                            array (
                                'id' => 304,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        304 =>
                            array (
                                'id' => 305,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        305 =>
                            array (
                                'id' => 306,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        306 =>
                            array (
                                'id' => 307,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        307 =>
                            array (
                                'id' => 308,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        308 =>
                            array (
                                'id' => 309,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        309 =>
                            array (
                                'id' => 310,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        310 =>
                            array (
                                'id' => 311,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        311 =>
                            array (
                                'id' => 312,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 12,
                            ),
                        312 =>
                            array (
                                'id' => 313,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 13,
                            ),
                        313 =>
                            array (
                                'id' => 314,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        314 =>
                            array (
                                'id' => 315,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        315 =>
                            array (
                                'id' => 316,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        316 =>
                            array (
                                'id' => 317,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        317 =>
                            array (
                                'id' => 318,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        318 =>
                            array (
                                'id' => 319,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        319 =>
                            array (
                                'id' => 320,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        320 =>
                            array (
                                'id' => 321,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 6,
                            ),
                        321 =>
                            array (
                                'id' => 322,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 7,
                            ),
                        322 =>
                            array (
                                'id' => 323,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 8,
                            ),
                        323 =>
                            array (
                                'id' => 324,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 9,
                            ),
                        324 =>
                            array (
                                'id' => 325,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 9,
                            ),
                        325 =>
                            array (
                                'id' => 326,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        326 =>
                            array (
                                'id' => 327,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 11,
                            ),
                        327 =>
                            array (
                                'id' => 328,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        328 =>
                            array (
                                'id' => 329,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 12,
                            ),
                        329 =>
                            array (
                                'id' => 330,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        330 =>
                            array (
                                'id' => 331,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 13,
                            ),
                        331 =>
                            array (
                                'id' => 332,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        332 =>
                            array (
                                'id' => 333,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        333 =>
                            array (
                                'id' => 334,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        334 =>
                            array (
                                'id' => 335,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        335 =>
                            array (
                                'id' => 336,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        336 =>
                            array (
                                'id' => 337,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        337 =>
                            array (
                                'id' => 338,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        338 =>
                            array (
                                'id' => 339,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        339 =>
                            array (
                                'id' => 340,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        340 =>
                            array (
                                'id' => 341,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        341 =>
                            array (
                                'id' => 342,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        342 =>
                            array (
                                'id' => 343,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        343 =>
                            array (
                                'id' => 344,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        344 =>
                            array (
                                'id' => 345,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        345 =>
                            array (
                                'id' => 346,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        346 =>
                            array (
                                'id' => 347,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        347 =>
                            array (
                                'id' => 348,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        348 =>
                            array (
                                'id' => 349,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        349 =>
                            array (
                                'id' => 350,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        350 =>
                            array (
                                'id' => 351,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        351 =>
                            array (
                                'id' => 352,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        352 =>
                            array (
                                'id' => 353,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        353 =>
                            array (
                                'id' => 354,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        354 =>
                            array (
                                'id' => 355,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        355 =>
                            array (
                                'id' => 356,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        356 =>
                            array (
                                'id' => 357,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 14,
                            ),
                        357 =>
                            array (
                                'id' => 358,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        358 =>
                            array (
                                'id' => 359,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        359 =>
                            array (
                                'id' => 360,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        360 =>
                            array (
                                'id' => 361,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        361 =>
                            array (
                                'id' => 362,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        362 =>
                            array (
                                'id' => 363,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        363 =>
                            array (
                                'id' => 364,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        364 =>
                            array (
                                'id' => 365,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        365 =>
                            array (
                                'id' => 366,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        366 =>
                            array (
                                'id' => 367,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        367 =>
                            array (
                                'id' => 368,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        368 =>
                            array (
                                'id' => 369,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        369 =>
                            array (
                                'id' => 370,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        370 =>
                            array (
                                'id' => 371,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        371 =>
                            array (
                                'id' => 372,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        372 =>
                            array (
                                'id' => 373,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        373 =>
                            array (
                                'id' => 374,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        374 =>
                            array (
                                'id' => 375,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        375 =>
                            array (
                                'id' => 376,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        376 =>
                            array (
                                'id' => 377,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        377 =>
                            array (
                                'id' => 378,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 13,
                            ),
                        378 =>
                            array (
                                'id' => 379,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        379 =>
                            array (
                                'id' => 380,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        380 =>
                            array (
                                'id' => 381,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        381 =>
                            array (
                                'id' => 382,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        382 =>
                            array (
                                'id' => 383,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        383 =>
                            array (
                                'id' => 384,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        384 =>
                            array (
                                'id' => 385,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        385 =>
                            array (
                                'id' => 386,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        386 =>
                            array (
                                'id' => 387,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        387 =>
                            array (
                                'id' => 388,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        388 =>
                            array (
                                'id' => 389,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        389 =>
                            array (
                                'id' => 390,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        390 =>
                            array (
                                'id' => 391,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        391 =>
                            array (
                                'id' => 392,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        392 =>
                            array (
                                'id' => 393,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        393 =>
                            array (
                                'id' => 394,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        394 =>
                            array (
                                'id' => 395,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        395 =>
                            array (
                                'id' => 396,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        396 =>
                            array (
                                'id' => 397,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        397 =>
                            array (
                                'id' => 398,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        398 =>
                            array (
                                'id' => 399,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        399 =>
                            array (
                                'id' => 400,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        400 =>
                            array (
                                'id' => 401,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        401 =>
                            array (
                                'id' => 402,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        402 =>
                            array (
                                'id' => 403,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        403 =>
                            array (
                                'id' => 404,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        404 =>
                            array (
                                'id' => 405,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        405 =>
                            array (
                                'id' => 406,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        406 =>
                            array (
                                'id' => 407,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        407 =>
                            array (
                                'id' => 408,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        408 =>
                            array (
                                'id' => 409,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        409 =>
                            array (
                                'id' => 410,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        410 =>
                            array (
                                'id' => 411,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        411 =>
                            array (
                                'id' => 412,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 12,
                            ),
                        412 =>
                            array (
                                'id' => 413,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        413 =>
                            array (
                                'id' => 414,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        414 =>
                            array (
                                'id' => 415,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        415 =>
                            array (
                                'id' => 416,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        416 =>
                            array (
                                'id' => 417,
                                'practice_test_id' => 3,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        417 =>
                            array (
                                'id' => 418,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        418 =>
                            array (
                                'id' => 419,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        419 =>
                            array (
                                'id' => 420,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        420 =>
                            array (
                                'id' => 421,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        421 =>
                            array (
                                'id' => 422,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        422 =>
                            array (
                                'id' => 423,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        423 =>
                            array (
                                'id' => 424,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        424 =>
                            array (
                                'id' => 425,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        425 =>
                            array (
                                'id' => 426,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        426 =>
                            array (
                                'id' => 427,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        427 =>
                            array (
                                'id' => 428,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        428 =>
                            array (
                                'id' => 429,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        429 =>
                            array (
                                'id' => 430,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        430 =>
                            array (
                                'id' => 431,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        431 =>
                            array (
                                'id' => 432,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        432 =>
                            array (
                                'id' => 433,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        433 =>
                            array (
                                'id' => 434,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        434 =>
                            array (
                                'id' => 435,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        435 =>
                            array (
                                'id' => 436,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        436 =>
                            array (
                                'id' => 437,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        437 =>
                            array (
                                'id' => 438,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        438 =>
                            array (
                                'id' => 439,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        439 =>
                            array (
                                'id' => 440,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        440 =>
                            array (
                                'id' => 441,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        441 =>
                            array (
                                'id' => 442,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        442 =>
                            array (
                                'id' => 443,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        443 =>
                            array (
                                'id' => 444,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        444 =>
                            array (
                                'id' => 445,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        445 =>
                            array (
                                'id' => 446,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        446 =>
                            array (
                                'id' => 447,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        447 =>
                            array (
                                'id' => 448,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        448 =>
                            array (
                                'id' => 449,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        449 =>
                            array (
                                'id' => 450,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        450 =>
                            array (
                                'id' => 451,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 12,
                            ),
                        451 =>
                            array (
                                'id' => 452,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 13,
                            ),
                        452 =>
                            array (
                                'id' => 453,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        453 =>
                            array (
                                'id' => 454,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        454 =>
                            array (
                                'id' => 455,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        455 =>
                            array (
                                'id' => 456,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 2,
                            ),
                        456 =>
                            array (
                                'id' => 457,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        457 =>
                            array (
                                'id' => 458,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 5,
                            ),
                        458 =>
                            array (
                                'id' => 459,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 6,
                            ),
                        459 =>
                            array (
                                'id' => 460,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 7,
                            ),
                        460 =>
                            array (
                                'id' => 461,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 8,
                            ),
                        461 =>
                            array (
                                'id' => 462,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 9,
                            ),
                        462 =>
                            array (
                                'id' => 463,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 10,
                            ),
                        463 =>
                            array (
                                'id' => 464,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 11,
                            ),
                        464 =>
                            array (
                                'id' => 465,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 12,
                            ),
                        465 =>
                            array (
                                'id' => 466,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 12,
                            ),
                        466 =>
                            array (
                                'id' => 467,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 13,
                            ),
                        467 =>
                            array (
                                'id' => 468,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 13,
                            ),
                        468 =>
                            array (
                                'id' => 469,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 14,
                            ),
                        469 =>
                            array (
                                'id' => 470,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        470 =>
                            array (
                                'id' => 471,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 15,
                            ),
                        471 =>
                            array (
                                'id' => 472,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        472 =>
                            array (
                                'id' => 473,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        473 =>
                            array (
                                'id' => 474,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        474 =>
                            array (
                                'id' => 475,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        475 =>
                            array (
                                'id' => 476,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        476 =>
                            array (
                                'id' => 477,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        477 =>
                            array (
                                'id' => 478,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        478 =>
                            array (
                                'id' => 479,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        479 =>
                            array (
                                'id' => 480,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        480 =>
                            array (
                                'id' => 481,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        481 =>
                            array (
                                'id' => 482,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        482 =>
                            array (
                                'id' => 483,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        483 =>
                            array (
                                'id' => 484,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        484 =>
                            array (
                                'id' => 485,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        485 =>
                            array (
                                'id' => 486,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        486 =>
                            array (
                                'id' => 487,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        487 =>
                            array (
                                'id' => 488,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 9,
                            ),
                        488 =>
                            array (
                                'id' => 489,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        489 =>
                            array (
                                'id' => 490,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        490 =>
                            array (
                                'id' => 491,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 11,
                            ),
                        491 =>
                            array (
                                'id' => 492,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        492 =>
                            array (
                                'id' => 493,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 12,
                            ),
                        493 =>
                            array (
                                'id' => 494,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        494 =>
                            array (
                                'id' => 495,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 13,
                            ),
                        495 =>
                            array (
                                'id' => 496,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 14,
                            ),
                        496 =>
                            array (
                                'id' => 497,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        497 =>
                            array (
                                'id' => 498,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        498 =>
                            array (
                                'id' => 499,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        499 =>
                            array (
                                'id' => 500,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        500 =>
                            array (
                                'id' => 501,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        501 =>
                            array (
                                'id' => 502,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        502 =>
                            array (
                                'id' => 503,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        503 =>
                            array (
                                'id' => 504,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        504 =>
                            array (
                                'id' => 505,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        505 =>
                            array (
                                'id' => 506,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        506 =>
                            array (
                                'id' => 507,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        507 =>
                            array (
                                'id' => 508,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        508 =>
                            array (
                                'id' => 509,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        509 =>
                            array (
                                'id' => 510,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        510 =>
                            array (
                                'id' => 511,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        511 =>
                            array (
                                'id' => 512,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        512 =>
                            array (
                                'id' => 513,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        513 =>
                            array (
                                'id' => 514,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        514 =>
                            array (
                                'id' => 515,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        515 =>
                            array (
                                'id' => 516,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        516 =>
                            array (
                                'id' => 517,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 14,
                            ),
                        517 =>
                            array (
                                'id' => 518,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        518 =>
                            array (
                                'id' => 519,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        519 =>
                            array (
                                'id' => 520,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        520 =>
                            array (
                                'id' => 521,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        521 =>
                            array (
                                'id' => 522,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        522 =>
                            array (
                                'id' => 523,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        523 =>
                            array (
                                'id' => 524,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        524 =>
                            array (
                                'id' => 525,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        525 =>
                            array (
                                'id' => 526,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        526 =>
                            array (
                                'id' => 527,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        527 =>
                            array (
                                'id' => 528,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        528 =>
                            array (
                                'id' => 529,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        529 =>
                            array (
                                'id' => 530,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        530 =>
                            array (
                                'id' => 531,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        531 =>
                            array (
                                'id' => 532,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        532 =>
                            array (
                                'id' => 533,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        533 =>
                            array (
                                'id' => 534,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        534 =>
                            array (
                                'id' => 535,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        535 =>
                            array (
                                'id' => 536,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        536 =>
                            array (
                                'id' => 537,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        537 =>
                            array (
                                'id' => 538,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        538 =>
                            array (
                                'id' => 539,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        539 =>
                            array (
                                'id' => 540,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        540 =>
                            array (
                                'id' => 541,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        541 =>
                            array (
                                'id' => 542,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        542 =>
                            array (
                                'id' => 543,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        543 =>
                            array (
                                'id' => 544,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        544 =>
                            array (
                                'id' => 545,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        545 =>
                            array (
                                'id' => 546,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        546 =>
                            array (
                                'id' => 547,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        547 =>
                            array (
                                'id' => 548,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        548 =>
                            array (
                                'id' => 549,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        549 =>
                            array (
                                'id' => 550,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        550 =>
                            array (
                                'id' => 551,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        551 =>
                            array (
                                'id' => 552,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        552 =>
                            array (
                                'id' => 553,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        553 =>
                            array (
                                'id' => 554,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        554 =>
                            array (
                                'id' => 555,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        555 =>
                            array (
                                'id' => 556,
                                'practice_test_id' => 4,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        556 =>
                            array (
                                'id' => 557,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        557 =>
                            array (
                                'id' => 558,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        558 =>
                            array (
                                'id' => 559,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        559 =>
                            array (
                                'id' => 560,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        560 =>
                            array (
                                'id' => 561,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        561 =>
                            array (
                                'id' => 562,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        562 =>
                            array (
                                'id' => 563,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        563 =>
                            array (
                                'id' => 564,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        564 =>
                            array (
                                'id' => 565,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        565 =>
                            array (
                                'id' => 566,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        566 =>
                            array (
                                'id' => 567,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        567 =>
                            array (
                                'id' => 568,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        568 =>
                            array (
                                'id' => 569,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        569 =>
                            array (
                                'id' => 570,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        570 =>
                            array (
                                'id' => 571,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        571 =>
                            array (
                                'id' => 572,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        572 =>
                            array (
                                'id' => 573,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        573 =>
                            array (
                                'id' => 574,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        574 =>
                            array (
                                'id' => 575,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 14,
                            ),
                        575 =>
                            array (
                                'id' => 576,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        576 =>
                            array (
                                'id' => 577,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        577 =>
                            array (
                                'id' => 578,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        578 =>
                            array (
                                'id' => 579,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        579 =>
                            array (
                                'id' => 580,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        580 =>
                            array (
                                'id' => 581,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        581 =>
                            array (
                                'id' => 582,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        582 =>
                            array (
                                'id' => 583,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        583 =>
                            array (
                                'id' => 584,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        584 =>
                            array (
                                'id' => 585,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        585 =>
                            array (
                                'id' => 586,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        586 =>
                            array (
                                'id' => 587,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        587 =>
                            array (
                                'id' => 588,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        588 =>
                            array (
                                'id' => 589,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        589 =>
                            array (
                                'id' => 590,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        590 =>
                            array (
                                'id' => 591,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        591 =>
                            array (
                                'id' => 592,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        592 =>
                            array (
                                'id' => 593,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        593 =>
                            array (
                                'id' => 594,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        594 =>
                            array (
                                'id' => 595,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        595 =>
                            array (
                                'id' => 596,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        596 =>
                            array (
                                'id' => 597,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 4,
                            ),
                        597 =>
                            array (
                                'id' => 598,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        598 =>
                            array (
                                'id' => 599,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 6,
                            ),
                        599 =>
                            array (
                                'id' => 600,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 7,
                            ),
                        600 =>
                            array (
                                'id' => 601,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 8,
                            ),
                        601 =>
                            array (
                                'id' => 602,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 9,
                            ),
                        602 =>
                            array (
                                'id' => 603,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 9,
                            ),
                        603 =>
                            array (
                                'id' => 604,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        604 =>
                            array (
                                'id' => 605,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 11,
                            ),
                        605 =>
                            array (
                                'id' => 606,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        606 =>
                            array (
                                'id' => 607,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 12,
                            ),
                        607 =>
                            array (
                                'id' => 608,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        608 =>
                            array (
                                'id' => 609,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        609 =>
                            array (
                                'id' => 610,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        610 =>
                            array (
                                'id' => 611,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        611 =>
                            array (
                                'id' => 612,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        612 =>
                            array (
                                'id' => 613,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        613 =>
                            array (
                                'id' => 614,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        614 =>
                            array (
                                'id' => 615,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        615 =>
                            array (
                                'id' => 616,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        616 =>
                            array (
                                'id' => 617,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        617 =>
                            array (
                                'id' => 618,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        618 =>
                            array (
                                'id' => 619,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        619 =>
                            array (
                                'id' => 620,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        620 =>
                            array (
                                'id' => 621,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        621 =>
                            array (
                                'id' => 622,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        622 =>
                            array (
                                'id' => 623,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        623 =>
                            array (
                                'id' => 624,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        624 =>
                            array (
                                'id' => 625,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        625 =>
                            array (
                                'id' => 626,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        626 =>
                            array (
                                'id' => 627,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        627 =>
                            array (
                                'id' => 628,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        628 =>
                            array (
                                'id' => 629,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        629 =>
                            array (
                                'id' => 630,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        630 =>
                            array (
                                'id' => 631,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        631 =>
                            array (
                                'id' => 632,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        632 =>
                            array (
                                'id' => 633,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 14,
                            ),
                        633 =>
                            array (
                                'id' => 634,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        634 =>
                            array (
                                'id' => 635,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 15,
                            ),
                        635 =>
                            array (
                                'id' => 636,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        636 =>
                            array (
                                'id' => 637,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        637 =>
                            array (
                                'id' => 638,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        638 =>
                            array (
                                'id' => 639,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        639 =>
                            array (
                                'id' => 640,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 1,
                            ),
                        640 =>
                            array (
                                'id' => 641,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        641 =>
                            array (
                                'id' => 642,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        642 =>
                            array (
                                'id' => 643,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        643 =>
                            array (
                                'id' => 644,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 4,
                            ),
                        644 =>
                            array (
                                'id' => 645,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        645 =>
                            array (
                                'id' => 646,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        646 =>
                            array (
                                'id' => 647,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        647 =>
                            array (
                                'id' => 648,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        648 =>
                            array (
                                'id' => 649,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        649 =>
                            array (
                                'id' => 650,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        650 =>
                            array (
                                'id' => 651,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        651 =>
                            array (
                                'id' => 652,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        652 =>
                            array (
                                'id' => 653,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        653 =>
                            array (
                                'id' => 654,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        654 =>
                            array (
                                'id' => 655,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 14,
                            ),
                        655 =>
                            array (
                                'id' => 656,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        656 =>
                            array (
                                'id' => 657,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        657 =>
                            array (
                                'id' => 658,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        658 =>
                            array (
                                'id' => 659,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        659 =>
                            array (
                                'id' => 660,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        660 =>
                            array (
                                'id' => 661,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        661 =>
                            array (
                                'id' => 662,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        662 =>
                            array (
                                'id' => 663,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        663 =>
                            array (
                                'id' => 664,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        664 =>
                            array (
                                'id' => 665,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        665 =>
                            array (
                                'id' => 666,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        666 =>
                            array (
                                'id' => 667,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        667 =>
                            array (
                                'id' => 668,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        668 =>
                            array (
                                'id' => 669,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        669 =>
                            array (
                                'id' => 670,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        670 =>
                            array (
                                'id' => 671,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        671 =>
                            array (
                                'id' => 672,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        672 =>
                            array (
                                'id' => 673,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        673 =>
                            array (
                                'id' => 674,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        674 =>
                            array (
                                'id' => 675,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        675 =>
                            array (
                                'id' => 676,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        676 =>
                            array (
                                'id' => 677,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        677 =>
                            array (
                                'id' => 678,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        678 =>
                            array (
                                'id' => 679,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        679 =>
                            array (
                                'id' => 680,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        680 =>
                            array (
                                'id' => 681,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        681 =>
                            array (
                                'id' => 682,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        682 =>
                            array (
                                'id' => 683,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        683 =>
                            array (
                                'id' => 684,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        684 =>
                            array (
                                'id' => 685,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        685 =>
                            array (
                                'id' => 686,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        686 =>
                            array (
                                'id' => 687,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        687 =>
                            array (
                                'id' => 688,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        688 =>
                            array (
                                'id' => 689,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        689 =>
                            array (
                                'id' => 690,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        690 =>
                            array (
                                'id' => 691,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        691 =>
                            array (
                                'id' => 692,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        692 =>
                            array (
                                'id' => 693,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        693 =>
                            array (
                                'id' => 694,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        694 =>
                            array (
                                'id' => 695,
                                'practice_test_id' => 5,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        695 =>
                            array (
                                'id' => 696,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        696 =>
                            array (
                                'id' => 697,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        697 =>
                            array (
                                'id' => 698,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        698 =>
                            array (
                                'id' => 699,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        699 =>
                            array (
                                'id' => 700,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        700 =>
                            array (
                                'id' => 701,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        701 =>
                            array (
                                'id' => 702,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        702 =>
                            array (
                                'id' => 703,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        703 =>
                            array (
                                'id' => 704,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        704 =>
                            array (
                                'id' => 705,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        705 =>
                            array (
                                'id' => 706,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        706 =>
                            array (
                                'id' => 707,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        707 =>
                            array (
                                'id' => 708,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        708 =>
                            array (
                                'id' => 709,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        709 =>
                            array (
                                'id' => 710,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        710 =>
                            array (
                                'id' => 711,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        711 =>
                            array (
                                'id' => 712,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        712 =>
                            array (
                                'id' => 713,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        713 =>
                            array (
                                'id' => 714,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        714 =>
                            array (
                                'id' => 715,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        715 =>
                            array (
                                'id' => 716,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        716 =>
                            array (
                                'id' => 717,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        717 =>
                            array (
                                'id' => 718,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        718 =>
                            array (
                                'id' => 719,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        719 =>
                            array (
                                'id' => 720,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        720 =>
                            array (
                                'id' => 721,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        721 =>
                            array (
                                'id' => 722,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        722 =>
                            array (
                                'id' => 723,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        723 =>
                            array (
                                'id' => 724,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        724 =>
                            array (
                                'id' => 725,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        725 =>
                            array (
                                'id' => 726,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        726 =>
                            array (
                                'id' => 727,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        727 =>
                            array (
                                'id' => 728,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        728 =>
                            array (
                                'id' => 729,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        729 =>
                            array (
                                'id' => 730,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        730 =>
                            array (
                                'id' => 731,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        731 =>
                            array (
                                'id' => 732,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        732 =>
                            array (
                                'id' => 733,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        733 =>
                            array (
                                'id' => 734,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        734 =>
                            array (
                                'id' => 735,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        735 =>
                            array (
                                'id' => 736,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        736 =>
                            array (
                                'id' => 737,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        737 =>
                            array (
                                'id' => 738,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        738 =>
                            array (
                                'id' => 739,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        739 =>
                            array (
                                'id' => 740,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        740 =>
                            array (
                                'id' => 741,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        741 =>
                            array (
                                'id' => 742,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        742 =>
                            array (
                                'id' => 743,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        743 =>
                            array (
                                'id' => 744,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        744 =>
                            array (
                                'id' => 745,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        745 =>
                            array (
                                'id' => 746,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        746 =>
                            array (
                                'id' => 747,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 12,
                            ),
                        747 =>
                            array (
                                'id' => 748,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        748 =>
                            array (
                                'id' => 749,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        749 =>
                            array (
                                'id' => 750,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        750 =>
                            array (
                                'id' => 751,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        751 =>
                            array (
                                'id' => 752,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        752 =>
                            array (
                                'id' => 753,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        753 =>
                            array (
                                'id' => 754,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        754 =>
                            array (
                                'id' => 755,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        755 =>
                            array (
                                'id' => 756,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        756 =>
                            array (
                                'id' => 757,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        757 =>
                            array (
                                'id' => 758,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        758 =>
                            array (
                                'id' => 759,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        759 =>
                            array (
                                'id' => 760,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        760 =>
                            array (
                                'id' => 761,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        761 =>
                            array (
                                'id' => 762,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        762 =>
                            array (
                                'id' => 763,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        763 =>
                            array (
                                'id' => 764,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        764 =>
                            array (
                                'id' => 765,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        765 =>
                            array (
                                'id' => 766,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        766 =>
                            array (
                                'id' => 767,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        767 =>
                            array (
                                'id' => 768,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        768 =>
                            array (
                                'id' => 769,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        769 =>
                            array (
                                'id' => 770,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 13,
                            ),
                        770 =>
                            array (
                                'id' => 771,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        771 =>
                            array (
                                'id' => 772,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 14,
                            ),
                        772 =>
                            array (
                                'id' => 773,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 15,
                            ),
                        773 =>
                            array (
                                'id' => 774,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 15,
                            ),
                        774 =>
                            array (
                                'id' => 775,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        775 =>
                            array (
                                'id' => 776,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        776 =>
                            array (
                                'id' => 777,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        777 =>
                            array (
                                'id' => 778,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        778 =>
                            array (
                                'id' => 779,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 1,
                            ),
                        779 =>
                            array (
                                'id' => 780,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        780 =>
                            array (
                                'id' => 781,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        781 =>
                            array (
                                'id' => 782,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 3,
                            ),
                        782 =>
                            array (
                                'id' => 783,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 4,
                            ),
                        783 =>
                            array (
                                'id' => 784,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        784 =>
                            array (
                                'id' => 785,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        785 =>
                            array (
                                'id' => 786,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 6,
                            ),
                        786 =>
                            array (
                                'id' => 787,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        787 =>
                            array (
                                'id' => 788,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        788 =>
                            array (
                                'id' => 789,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 8,
                            ),
                        789 =>
                            array (
                                'id' => 790,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        790 =>
                            array (
                                'id' => 791,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        791 =>
                            array (
                                'id' => 792,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        792 =>
                            array (
                                'id' => 793,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        793 =>
                            array (
                                'id' => 794,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        794 =>
                            array (
                                'id' => 795,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 14,
                            ),
                        795 =>
                            array (
                                'id' => 796,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        796 =>
                            array (
                                'id' => 797,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        797 =>
                            array (
                                'id' => 798,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        798 =>
                            array (
                                'id' => 799,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        799 =>
                            array (
                                'id' => 800,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        800 =>
                            array (
                                'id' => 801,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        801 =>
                            array (
                                'id' => 802,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        802 =>
                            array (
                                'id' => 803,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        803 =>
                            array (
                                'id' => 804,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        804 =>
                            array (
                                'id' => 805,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        805 =>
                            array (
                                'id' => 806,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        806 =>
                            array (
                                'id' => 807,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        807 =>
                            array (
                                'id' => 808,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        808 =>
                            array (
                                'id' => 809,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        809 =>
                            array (
                                'id' => 810,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        810 =>
                            array (
                                'id' => 811,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        811 =>
                            array (
                                'id' => 812,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        812 =>
                            array (
                                'id' => 813,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        813 =>
                            array (
                                'id' => 814,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        814 =>
                            array (
                                'id' => 815,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        815 =>
                            array (
                                'id' => 816,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        816 =>
                            array (
                                'id' => 817,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        817 =>
                            array (
                                'id' => 818,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        818 =>
                            array (
                                'id' => 819,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        819 =>
                            array (
                                'id' => 820,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        820 =>
                            array (
                                'id' => 821,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        821 =>
                            array (
                                'id' => 822,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        822 =>
                            array (
                                'id' => 823,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        823 =>
                            array (
                                'id' => 824,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        824 =>
                            array (
                                'id' => 825,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        825 =>
                            array (
                                'id' => 826,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        826 =>
                            array (
                                'id' => 827,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        827 =>
                            array (
                                'id' => 828,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        828 =>
                            array (
                                'id' => 829,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        829 =>
                            array (
                                'id' => 830,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        830 =>
                            array (
                                'id' => 831,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        831 =>
                            array (
                                'id' => 832,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        832 =>
                            array (
                                'id' => 833,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        833 =>
                            array (
                                'id' => 834,
                                'practice_test_id' => 6,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        834 =>
                            array (
                                'id' => 835,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        835 =>
                            array (
                                'id' => 836,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        836 =>
                            array (
                                'id' => 837,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        837 =>
                            array (
                                'id' => 838,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        838 =>
                            array (
                                'id' => 839,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        839 =>
                            array (
                                'id' => 840,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        840 =>
                            array (
                                'id' => 841,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        841 =>
                            array (
                                'id' => 842,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        842 =>
                            array (
                                'id' => 843,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        843 =>
                            array (
                                'id' => 844,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        844 =>
                            array (
                                'id' => 845,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        845 =>
                            array (
                                'id' => 846,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        846 =>
                            array (
                                'id' => 847,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        847 =>
                            array (
                                'id' => 848,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        848 =>
                            array (
                                'id' => 849,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 10,
                            ),
                        849 =>
                            array (
                                'id' => 850,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        850 =>
                            array (
                                'id' => 851,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        851 =>
                            array (
                                'id' => 852,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        852 =>
                            array (
                                'id' => 853,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 14,
                            ),
                        853 =>
                            array (
                                'id' => 854,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        854 =>
                            array (
                                'id' => 855,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        855 =>
                            array (
                                'id' => 856,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        856 =>
                            array (
                                'id' => 857,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        857 =>
                            array (
                                'id' => 858,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        858 =>
                            array (
                                'id' => 859,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        859 =>
                            array (
                                'id' => 860,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        860 =>
                            array (
                                'id' => 861,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        861 =>
                            array (
                                'id' => 862,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        862 =>
                            array (
                                'id' => 863,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        863 =>
                            array (
                                'id' => 864,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        864 =>
                            array (
                                'id' => 865,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        865 =>
                            array (
                                'id' => 866,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        866 =>
                            array (
                                'id' => 867,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        867 =>
                            array (
                                'id' => 868,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        868 =>
                            array (
                                'id' => 869,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        869 =>
                            array (
                                'id' => 870,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        870 =>
                            array (
                                'id' => 871,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        871 =>
                            array (
                                'id' => 872,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        872 =>
                            array (
                                'id' => 873,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        873 =>
                            array (
                                'id' => 874,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        874 =>
                            array (
                                'id' => 875,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 4,
                            ),
                        875 =>
                            array (
                                'id' => 876,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        876 =>
                            array (
                                'id' => 877,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 6,
                            ),
                        877 =>
                            array (
                                'id' => 878,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 7,
                            ),
                        878 =>
                            array (
                                'id' => 879,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        879 =>
                            array (
                                'id' => 880,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        880 =>
                            array (
                                'id' => 881,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 9,
                            ),
                        881 =>
                            array (
                                'id' => 882,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        882 =>
                            array (
                                'id' => 883,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        883 =>
                            array (
                                'id' => 884,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        884 =>
                            array (
                                'id' => 885,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 12,
                            ),
                        885 =>
                            array (
                                'id' => 886,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        886 =>
                            array (
                                'id' => 887,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        887 =>
                            array (
                                'id' => 888,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        888 =>
                            array (
                                'id' => 889,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        889 =>
                            array (
                                'id' => 890,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        890 =>
                            array (
                                'id' => 891,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        891 =>
                            array (
                                'id' => 892,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        892 =>
                            array (
                                'id' => 893,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        893 =>
                            array (
                                'id' => 894,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        894 =>
                            array (
                                'id' => 895,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        895 =>
                            array (
                                'id' => 896,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        896 =>
                            array (
                                'id' => 897,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        897 =>
                            array (
                                'id' => 898,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        898 =>
                            array (
                                'id' => 899,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        899 =>
                            array (
                                'id' => 900,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        900 =>
                            array (
                                'id' => 901,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        901 =>
                            array (
                                'id' => 902,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        902 =>
                            array (
                                'id' => 903,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        903 =>
                            array (
                                'id' => 904,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        904 =>
                            array (
                                'id' => 905,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        905 =>
                            array (
                                'id' => 906,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        906 =>
                            array (
                                'id' => 907,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        907 =>
                            array (
                                'id' => 908,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 12,
                            ),
                        908 =>
                            array (
                                'id' => 909,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        909 =>
                            array (
                                'id' => 910,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        910 =>
                            array (
                                'id' => 911,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 14,
                            ),
                        911 =>
                            array (
                                'id' => 912,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        912 =>
                            array (
                                'id' => 913,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 15,
                            ),
                        913 =>
                            array (
                                'id' => 914,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        914 =>
                            array (
                                'id' => 915,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        915 =>
                            array (
                                'id' => 916,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        916 =>
                            array (
                                'id' => 917,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        917 =>
                            array (
                                'id' => 918,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 1,
                            ),
                        918 =>
                            array (
                                'id' => 919,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        919 =>
                            array (
                                'id' => 920,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        920 =>
                            array (
                                'id' => 921,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 3,
                            ),
                        921 =>
                            array (
                                'id' => 922,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 4,
                            ),
                        922 =>
                            array (
                                'id' => 923,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        923 =>
                            array (
                                'id' => 924,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        924 =>
                            array (
                                'id' => 925,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 6,
                            ),
                        925 =>
                            array (
                                'id' => 926,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        926 =>
                            array (
                                'id' => 927,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        927 =>
                            array (
                                'id' => 928,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        928 =>
                            array (
                                'id' => 929,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        929 =>
                            array (
                                'id' => 930,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        930 =>
                            array (
                                'id' => 931,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        931 =>
                            array (
                                'id' => 932,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        932 =>
                            array (
                                'id' => 933,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        933 =>
                            array (
                                'id' => 934,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 14,
                            ),
                        934 =>
                            array (
                                'id' => 935,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        935 =>
                            array (
                                'id' => 936,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        936 =>
                            array (
                                'id' => 937,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        937 =>
                            array (
                                'id' => 938,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        938 =>
                            array (
                                'id' => 939,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        939 =>
                            array (
                                'id' => 940,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        940 =>
                            array (
                                'id' => 941,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        941 =>
                            array (
                                'id' => 942,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        942 =>
                            array (
                                'id' => 943,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        943 =>
                            array (
                                'id' => 944,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        944 =>
                            array (
                                'id' => 945,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        945 =>
                            array (
                                'id' => 946,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        946 =>
                            array (
                                'id' => 947,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        947 =>
                            array (
                                'id' => 948,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        948 =>
                            array (
                                'id' => 949,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        949 =>
                            array (
                                'id' => 950,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        950 =>
                            array (
                                'id' => 951,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        951 =>
                            array (
                                'id' => 952,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        952 =>
                            array (
                                'id' => 953,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        953 =>
                            array (
                                'id' => 954,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        954 =>
                            array (
                                'id' => 955,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        955 =>
                            array (
                                'id' => 956,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        956 =>
                            array (
                                'id' => 957,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        957 =>
                            array (
                                'id' => 958,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        958 =>
                            array (
                                'id' => 959,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        959 =>
                            array (
                                'id' => 960,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        960 =>
                            array (
                                'id' => 961,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        961 =>
                            array (
                                'id' => 962,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        962 =>
                            array (
                                'id' => 963,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        963 =>
                            array (
                                'id' => 964,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        964 =>
                            array (
                                'id' => 965,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        965 =>
                            array (
                                'id' => 966,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        966 =>
                            array (
                                'id' => 967,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        967 =>
                            array (
                                'id' => 968,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        968 =>
                            array (
                                'id' => 969,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        969 =>
                            array (
                                'id' => 970,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        970 =>
                            array (
                                'id' => 971,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        971 =>
                            array (
                                'id' => 972,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        972 =>
                            array (
                                'id' => 973,
                                'practice_test_id' => 7,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        973 =>
                            array (
                                'id' => 974,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        974 =>
                            array (
                                'id' => 975,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        975 =>
                            array (
                                'id' => 976,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        976 =>
                            array (
                                'id' => 977,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        977 =>
                            array (
                                'id' => 978,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        978 =>
                            array (
                                'id' => 979,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        979 =>
                            array (
                                'id' => 980,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        980 =>
                            array (
                                'id' => 981,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        981 =>
                            array (
                                'id' => 982,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        982 =>
                            array (
                                'id' => 983,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        983 =>
                            array (
                                'id' => 984,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        984 =>
                            array (
                                'id' => 985,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        985 =>
                            array (
                                'id' => 986,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        986 =>
                            array (
                                'id' => 987,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        987 =>
                            array (
                                'id' => 988,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        988 =>
                            array (
                                'id' => 989,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        989 =>
                            array (
                                'id' => 990,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        990 =>
                            array (
                                'id' => 991,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        991 =>
                            array (
                                'id' => 992,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 14,
                            ),
                        992 =>
                            array (
                                'id' => 993,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        993 =>
                            array (
                                'id' => 994,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        994 =>
                            array (
                                'id' => 995,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        995 =>
                            array (
                                'id' => 996,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        996 =>
                            array (
                                'id' => 997,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        997 =>
                            array (
                                'id' => 998,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        998 =>
                            array (
                                'id' => 999,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        999 =>
                            array (
                                'id' => 1000,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        1000 =>
                            array (
                                'id' => 1001,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        1001 =>
                            array (
                                'id' => 1002,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 9,
                            ),
                        1002 =>
                            array (
                                'id' => 1003,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        1003 =>
                            array (
                                'id' => 1004,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        1004 =>
                            array (
                                'id' => 1005,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        1005 =>
                            array (
                                'id' => 1006,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 12,
                            ),
                        1006 =>
                            array (
                                'id' => 1007,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        1007 =>
                            array (
                                'id' => 1008,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        1008 =>
                            array (
                                'id' => 1009,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        1009 =>
                            array (
                                'id' => 1010,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        1010 =>
                            array (
                                'id' => 1011,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        1011 =>
                            array (
                                'id' => 1012,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1012 =>
                            array (
                                'id' => 1013,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        1013 =>
                            array (
                                'id' => 1014,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 5,
                            ),
                        1014 =>
                            array (
                                'id' => 1015,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 6,
                            ),
                        1015 =>
                            array (
                                'id' => 1016,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 7,
                            ),
                        1016 =>
                            array (
                                'id' => 1017,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 8,
                            ),
                        1017 =>
                            array (
                                'id' => 1018,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 8,
                            ),
                        1018 =>
                            array (
                                'id' => 1019,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 9,
                            ),
                        1019 =>
                            array (
                                'id' => 1020,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 10,
                            ),
                        1020 =>
                            array (
                                'id' => 1021,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        1021 =>
                            array (
                                'id' => 1022,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 11,
                            ),
                        1022 =>
                            array (
                                'id' => 1023,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 12,
                            ),
                        1023 =>
                            array (
                                'id' => 1024,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 13,
                            ),
                        1024 =>
                            array (
                                'id' => 1025,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 14,
                            ),
                        1025 =>
                            array (
                                'id' => 1026,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 15,
                            ),
                        1026 =>
                            array (
                                'id' => 1027,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 15,
                            ),
                        1027 =>
                            array (
                                'id' => 1028,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        1028 =>
                            array (
                                'id' => 1029,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1029 =>
                            array (
                                'id' => 1030,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1030 =>
                            array (
                                'id' => 1031,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1031 =>
                            array (
                                'id' => 1032,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        1032 =>
                            array (
                                'id' => 1033,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        1033 =>
                            array (
                                'id' => 1034,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        1034 =>
                            array (
                                'id' => 1035,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        1035 =>
                            array (
                                'id' => 1036,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        1036 =>
                            array (
                                'id' => 1037,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        1037 =>
                            array (
                                'id' => 1038,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        1038 =>
                            array (
                                'id' => 1039,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        1039 =>
                            array (
                                'id' => 1040,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        1040 =>
                            array (
                                'id' => 1041,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        1041 =>
                            array (
                                'id' => 1042,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        1042 =>
                            array (
                                'id' => 1043,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        1043 =>
                            array (
                                'id' => 1044,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        1044 =>
                            array (
                                'id' => 1045,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        1045 =>
                            array (
                                'id' => 1046,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        1046 =>
                            array (
                                'id' => 1047,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 11,
                            ),
                        1047 =>
                            array (
                                'id' => 1048,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        1048 =>
                            array (
                                'id' => 1049,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        1049 =>
                            array (
                                'id' => 1050,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        1050 =>
                            array (
                                'id' => 1051,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        1051 =>
                            array (
                                'id' => 1052,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 15,
                            ),
                        1052 =>
                            array (
                                'id' => 1053,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        1053 =>
                            array (
                                'id' => 1054,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1054 =>
                            array (
                                'id' => 1055,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1055 =>
                            array (
                                'id' => 1056,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1056 =>
                            array (
                                'id' => 1057,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        1057 =>
                            array (
                                'id' => 1058,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        1058 =>
                            array (
                                'id' => 1059,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        1059 =>
                            array (
                                'id' => 1060,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        1060 =>
                            array (
                                'id' => 1061,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        1061 =>
                            array (
                                'id' => 1062,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        1062 =>
                            array (
                                'id' => 1063,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        1063 =>
                            array (
                                'id' => 1064,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 6,
                            ),
                        1064 =>
                            array (
                                'id' => 1065,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        1065 =>
                            array (
                                'id' => 1066,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        1066 =>
                            array (
                                'id' => 1067,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 8,
                            ),
                        1067 =>
                            array (
                                'id' => 1068,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        1068 =>
                            array (
                                'id' => 1069,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        1069 =>
                            array (
                                'id' => 1070,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        1070 =>
                            array (
                                'id' => 1071,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        1071 =>
                            array (
                                'id' => 1072,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        1072 =>
                            array (
                                'id' => 1073,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 14,
                            ),
                        1073 =>
                            array (
                                'id' => 1074,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        1074 =>
                            array (
                                'id' => 1075,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1075 =>
                            array (
                                'id' => 1076,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1076 =>
                            array (
                                'id' => 1077,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1077 =>
                            array (
                                'id' => 1078,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 1,
                            ),
                        1078 =>
                            array (
                                'id' => 1079,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 2,
                            ),
                        1079 =>
                            array (
                                'id' => 1080,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 3,
                            ),
                        1080 =>
                            array (
                                'id' => 1081,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        1081 =>
                            array (
                                'id' => 1082,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        1082 =>
                            array (
                                'id' => 1083,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        1083 =>
                            array (
                                'id' => 1084,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        1084 =>
                            array (
                                'id' => 1085,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        1085 =>
                            array (
                                'id' => 1086,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        1086 =>
                            array (
                                'id' => 1087,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 9,
                            ),
                        1087 =>
                            array (
                                'id' => 1088,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        1088 =>
                            array (
                                'id' => 1089,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        1089 =>
                            array (
                                'id' => 1090,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        1090 =>
                            array (
                                'id' => 1091,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        1091 =>
                            array (
                                'id' => 1092,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        1092 =>
                            array (
                                'id' => 1093,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        1093 =>
                            array (
                                'id' => 1094,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1094 =>
                            array (
                                'id' => 1095,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        1095 =>
                            array (
                                'id' => 1096,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 4,
                            ),
                        1096 =>
                            array (
                                'id' => 1097,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        1097 =>
                            array (
                                'id' => 1098,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        1098 =>
                            array (
                                'id' => 1099,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        1099 =>
                            array (
                                'id' => 1100,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        1100 =>
                            array (
                                'id' => 1101,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        1101 =>
                            array (
                                'id' => 1102,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        1102 =>
                            array (
                                'id' => 1103,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        1103 =>
                            array (
                                'id' => 1104,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        1104 =>
                            array (
                                'id' => 1105,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        1105 =>
                            array (
                                'id' => 1106,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        1106 =>
                            array (
                                'id' => 1107,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        1107 =>
                            array (
                                'id' => 1108,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        1108 =>
                            array (
                                'id' => 1109,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        1109 =>
                            array (
                                'id' => 1110,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        1110 =>
                            array (
                                'id' => 1111,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        1111 =>
                            array (
                                'id' => 1112,
                                'practice_test_id' => 8,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        1112 =>
                            array (
                                'id' => 1113,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1113 =>
                            array (
                                'id' => 1114,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 1,
                                'section_score' => 2,
                            ),
                        1114 =>
                            array (
                                'id' => 1115,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 2,
                                'section_score' => 3,
                            ),
                        1115 =>
                            array (
                                'id' => 1116,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 3,
                                'section_score' => 4,
                            ),
                        1116 =>
                            array (
                                'id' => 1117,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        1117 =>
                            array (
                                'id' => 1118,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        1118 =>
                            array (
                                'id' => 1119,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 6,
                                'section_score' => 6,
                            ),
                        1119 =>
                            array (
                                'id' => 1120,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        1120 =>
                            array (
                                'id' => 1121,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        1121 =>
                            array (
                                'id' => 1122,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        1122 =>
                            array (
                                'id' => 1123,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        1123 =>
                            array (
                                'id' => 1124,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        1124 =>
                            array (
                                'id' => 1125,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        1125 =>
                            array (
                                'id' => 1126,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 13,
                                'section_score' => 10,
                            ),
                        1126 =>
                            array (
                                'id' => 1127,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        1127 =>
                            array (
                                'id' => 1128,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 15,
                                'section_score' => 11,
                            ),
                        1128 =>
                            array (
                                'id' => 1129,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 16,
                                'section_score' => 12,
                            ),
                        1129 =>
                            array (
                                'id' => 1130,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 17,
                                'section_score' => 13,
                            ),
                        1130 =>
                            array (
                                'id' => 1131,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 18,
                                'section_score' => 14,
                            ),
                        1131 =>
                            array (
                                'id' => 1132,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 1,
                                'raw_score' => 19,
                                'section_score' => 15,
                            ),
                        1132 =>
                            array (
                                'id' => 1133,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1133 =>
                            array (
                                'id' => 1134,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1134 =>
                            array (
                                'id' => 1135,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1135 =>
                            array (
                                'id' => 1136,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        1136 =>
                            array (
                                'id' => 1137,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 4,
                                'section_score' => 4,
                            ),
                        1137 =>
                            array (
                                'id' => 1138,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 5,
                                'section_score' => 5,
                            ),
                        1138 =>
                            array (
                                'id' => 1139,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        1139 =>
                            array (
                                'id' => 1140,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 7,
                                'section_score' => 8,
                            ),
                        1140 =>
                            array (
                                'id' => 1141,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        1141 =>
                            array (
                                'id' => 1142,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        1142 =>
                            array (
                                'id' => 1143,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        1143 =>
                            array (
                                'id' => 1144,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        1144 =>
                            array (
                                'id' => 1145,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        1145 =>
                            array (
                                'id' => 1146,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 13,
                                'section_score' => 12,
                            ),
                        1146 =>
                            array (
                                'id' => 1147,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 14,
                                'section_score' => 13,
                            ),
                        1147 =>
                            array (
                                'id' => 1148,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        1148 =>
                            array (
                                'id' => 1149,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 16,
                                'section_score' => 14,
                            ),
                        1149 =>
                            array (
                                'id' => 1150,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 2,
                                'raw_score' => 17,
                                'section_score' => 15,
                            ),
                        1150 =>
                            array (
                                'id' => 1151,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1151 =>
                            array (
                                'id' => 1152,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        1152 =>
                            array (
                                'id' => 1153,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 2,
                                'section_score' => 4,
                            ),
                        1153 =>
                            array (
                                'id' => 1154,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        1154 =>
                            array (
                                'id' => 1155,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 4,
                                'section_score' => 6,
                            ),
                        1155 =>
                            array (
                                'id' => 1156,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 5,
                                'section_score' => 7,
                            ),
                        1156 =>
                            array (
                                'id' => 1157,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 6,
                                'section_score' => 8,
                            ),
                        1157 =>
                            array (
                                'id' => 1158,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 7,
                                'section_score' => 9,
                            ),
                        1158 =>
                            array (
                                'id' => 1159,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 8,
                                'section_score' => 9,
                            ),
                        1159 =>
                            array (
                                'id' => 1160,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 9,
                                'section_score' => 10,
                            ),
                        1160 =>
                            array (
                                'id' => 1161,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 10,
                                'section_score' => 10,
                            ),
                        1161 =>
                            array (
                                'id' => 1162,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 11,
                                'section_score' => 11,
                            ),
                        1162 =>
                            array (
                                'id' => 1163,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 12,
                                'section_score' => 12,
                            ),
                        1163 =>
                            array (
                                'id' => 1164,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 13,
                                'section_score' => 13,
                            ),
                        1164 =>
                            array (
                                'id' => 1165,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 14,
                                'section_score' => 14,
                            ),
                        1165 =>
                            array (
                                'id' => 1166,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 15,
                                'section_score' => 14,
                            ),
                        1166 =>
                            array (
                                'id' => 1167,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 3,
                                'raw_score' => 16,
                                'section_score' => 15,
                            ),
                        1167 =>
                            array (
                                'id' => 1168,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1168 =>
                            array (
                                'id' => 1169,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1169 =>
                            array (
                                'id' => 1170,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 2,
                                'section_score' => 2,
                            ),
                        1170 =>
                            array (
                                'id' => 1171,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 3,
                                'section_score' => 3,
                            ),
                        1171 =>
                            array (
                                'id' => 1172,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        1172 =>
                            array (
                                'id' => 1173,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        1173 =>
                            array (
                                'id' => 1174,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        1174 =>
                            array (
                                'id' => 1175,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        1175 =>
                            array (
                                'id' => 1176,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 8,
                                'section_score' => 6,
                            ),
                        1176 =>
                            array (
                                'id' => 1177,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 9,
                                'section_score' => 7,
                            ),
                        1177 =>
                            array (
                                'id' => 1178,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        1178 =>
                            array (
                                'id' => 1179,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 11,
                                'section_score' => 8,
                            ),
                        1179 =>
                            array (
                                'id' => 1180,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        1180 =>
                            array (
                                'id' => 1181,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        1181 =>
                            array (
                                'id' => 1182,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        1182 =>
                            array (
                                'id' => 1183,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        1183 =>
                            array (
                                'id' => 1184,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 16,
                                'section_score' => 10,
                            ),
                        1184 =>
                            array (
                                'id' => 1185,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 17,
                                'section_score' => 11,
                            ),
                        1185 =>
                            array (
                                'id' => 1186,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 18,
                                'section_score' => 11,
                            ),
                        1186 =>
                            array (
                                'id' => 1187,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 19,
                                'section_score' => 12,
                            ),
                        1187 =>
                            array (
                                'id' => 1188,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 20,
                                'section_score' => 13,
                            ),
                        1188 =>
                            array (
                                'id' => 1189,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 21,
                                'section_score' => 13,
                            ),
                        1189 =>
                            array (
                                'id' => 1190,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 22,
                                'section_score' => 14,
                            ),
                        1190 =>
                            array (
                                'id' => 1191,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 23,
                                'section_score' => 15,
                            ),
                        1191 =>
                            array (
                                'id' => 1192,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 4,
                                'raw_score' => 24,
                                'section_score' => 15,
                            ),
                        1192 =>
                            array (
                                'id' => 1193,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1193 =>
                            array (
                                'id' => 1194,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1194 =>
                            array (
                                'id' => 1195,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1195 =>
                            array (
                                'id' => 1196,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        1196 =>
                            array (
                                'id' => 1197,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        1197 =>
                            array (
                                'id' => 1198,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        1198 =>
                            array (
                                'id' => 1199,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 6,
                                'section_score' => 4,
                            ),
                        1199 =>
                            array (
                                'id' => 1200,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 7,
                                'section_score' => 5,
                            ),
                        1200 =>
                            array (
                                'id' => 1201,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 8,
                                'section_score' => 5,
                            ),
                        1201 =>
                            array (
                                'id' => 1202,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 9,
                                'section_score' => 6,
                            ),
                        1202 =>
                            array (
                                'id' => 1203,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 10,
                                'section_score' => 7,
                            ),
                        1203 =>
                            array (
                                'id' => 1204,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 11,
                                'section_score' => 7,
                            ),
                        1204 =>
                            array (
                                'id' => 1205,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 12,
                                'section_score' => 8,
                            ),
                        1205 =>
                            array (
                                'id' => 1206,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 13,
                                'section_score' => 9,
                            ),
                        1206 =>
                            array (
                                'id' => 1207,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 14,
                                'section_score' => 9,
                            ),
                        1207 =>
                            array (
                                'id' => 1208,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 15,
                                'section_score' => 10,
                            ),
                        1208 =>
                            array (
                                'id' => 1209,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 16,
                                'section_score' => 11,
                            ),
                        1209 =>
                            array (
                                'id' => 1210,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 17,
                                'section_score' => 12,
                            ),
                        1210 =>
                            array (
                                'id' => 1211,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 18,
                                'section_score' => 13,
                            ),
                        1211 =>
                            array (
                                'id' => 1212,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 19,
                                'section_score' => 14,
                            ),
                        1212 =>
                            array (
                                'id' => 1213,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 5,
                                'raw_score' => 20,
                                'section_score' => 15,
                            ),
                        1213 =>
                            array (
                                'id' => 1214,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1214 =>
                            array (
                                'id' => 1215,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 1,
                                'section_score' => 1,
                            ),
                        1215 =>
                            array (
                                'id' => 1216,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 2,
                                'section_score' => 1,
                            ),
                        1216 =>
                            array (
                                'id' => 1217,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 3,
                                'section_score' => 2,
                            ),
                        1217 =>
                            array (
                                'id' => 1218,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 4,
                                'section_score' => 3,
                            ),
                        1218 =>
                            array (
                                'id' => 1219,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 5,
                                'section_score' => 4,
                            ),
                        1219 =>
                            array (
                                'id' => 1220,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 6,
                                'section_score' => 5,
                            ),
                        1220 =>
                            array (
                                'id' => 1221,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 7,
                                'section_score' => 6,
                            ),
                        1221 =>
                            array (
                                'id' => 1222,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 8,
                                'section_score' => 7,
                            ),
                        1222 =>
                            array (
                                'id' => 1223,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 9,
                                'section_score' => 8,
                            ),
                        1223 =>
                            array (
                                'id' => 1224,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 10,
                                'section_score' => 8,
                            ),
                        1224 =>
                            array (
                                'id' => 1225,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 11,
                                'section_score' => 9,
                            ),
                        1225 =>
                            array (
                                'id' => 1226,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 12,
                                'section_score' => 10,
                            ),
                        1226 =>
                            array (
                                'id' => 1227,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        1227 =>
                            array (
                                'id' => 1228,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 14,
                                'section_score' => 11,
                            ),
                        1228 =>
                            array (
                                'id' => 1229,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 15,
                                'section_score' => 12,
                            ),
                        1229 =>
                            array (
                                'id' => 1230,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        1230 =>
                            array (
                                'id' => 1231,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        1231 =>
                            array (
                                'id' => 1232,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 6,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                        1232 =>
                            array (
                                'id' => 1233,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 0,
                                'section_score' => 1,
                            ),
                        1233 =>
                            array (
                                'id' => 1234,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 1,
                                'section_score' => 3,
                            ),
                        1234 =>
                            array (
                                'id' => 1235,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 2,
                                'section_score' => 4,
                            ),
                        1235 =>
                            array (
                                'id' => 1236,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 3,
                                'section_score' => 5,
                            ),
                        1236 =>
                            array (
                                'id' => 1237,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 4,
                                'section_score' => 5,
                            ),
                        1237 =>
                            array (
                                'id' => 1238,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 5,
                                'section_score' => 6,
                            ),
                        1238 =>
                            array (
                                'id' => 1239,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 6,
                                'section_score' => 7,
                            ),
                        1239 =>
                            array (
                                'id' => 1240,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 7,
                                'section_score' => 7,
                            ),
                        1240 =>
                            array (
                                'id' => 1241,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 8,
                                'section_score' => 8,
                            ),
                        1241 =>
                            array (
                                'id' => 1242,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 9,
                                'section_score' => 9,
                            ),
                        1242 =>
                            array (
                                'id' => 1243,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 10,
                                'section_score' => 9,
                            ),
                        1243 =>
                            array (
                                'id' => 1244,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 11,
                                'section_score' => 10,
                            ),
                        1244 =>
                            array (
                                'id' => 1245,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 12,
                                'section_score' => 11,
                            ),
                        1245 =>
                            array (
                                'id' => 1246,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 13,
                                'section_score' => 11,
                            ),
                        1246 =>
                            array (
                                'id' => 1247,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 14,
                                'section_score' => 12,
                            ),
                        1247 =>
                            array (
                                'id' => 1248,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 15,
                                'section_score' => 13,
                            ),
                        1248 =>
                            array (
                                'id' => 1249,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 16,
                                'section_score' => 13,
                            ),
                        1249 =>
                            array (
                                'id' => 1250,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 17,
                                'section_score' => 14,
                            ),
                        1250 =>
                            array (
                                'id' => 1251,
                                'practice_test_id' => 15,
                                'sub_score_section_id' => 7,
                                'raw_score' => 18,
                                'section_score' => 15,
                            ),
                    )
        );
    }
}
