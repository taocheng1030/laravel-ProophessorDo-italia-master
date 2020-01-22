<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sat_scoring_table')->truncate();

        DB::table('sat_scoring_table')
            ->insert(
                [
		[
            "id" =>  1,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  2,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  3,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  4,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  5,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  240
		],
		[
            "id" =>  6,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  260
		],
		[
            "id" =>  7,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  280
		],
		[
            "id" =>  8,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  290
		],
		[
            "id" =>  9,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  310
		],
		[
            "id" =>  10,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  320
		],
		[
            "id" =>  11,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  330
		],
		[
            "id" =>  12,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  340
		],
		[
            "id" =>  13,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  360
		],
		[
            "id" =>  14,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  370
		],
		[
            "id" =>  15,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  380
		],
		[
            "id" =>  16,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  390
		],
		[
            "id" =>  17,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  410
		],
		[
            "id" =>  18,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  420
		],
		[
            "id" =>  19,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  430
		],
		[
            "id" =>  20,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  440
		],
		[
            "id" =>  21,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  450
		],
		[
            "id" =>  22,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  460
		],
		[
            "id" =>  23,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  470
		],
		[
            "id" =>  24,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  480
		],
		[
            "id" =>  25,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  480
		],
		[
            "id" =>  26,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  490
		],
		[
            "id" =>  27,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  500
		],
		[
            "id" =>  28,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  510
		],
		[
            "id" =>  29,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  520
		],
		[
            "id" =>  30,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  520
		],
		[
            "id" =>  31,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  530
		],
		[
            "id" =>  32,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  540
		],
		[
            "id" =>  33,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  550
		],
		[
            "id" =>  34,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  560
		],
		[
            "id" =>  35,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  560
		],
		[
            "id" =>  36,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  570
		],
		[
            "id" =>  37,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  580
		],
		[
            "id" =>  38,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  590
		],
		[
            "id" =>  39,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  600
		],
		[
            "id" =>  40,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  600
		],
		[
            "id" =>  41,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  610
		],
		[
            "id" =>  42,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  620
		],
		[
            "id" =>  43,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  630
		],
		[
            "id" =>  44,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  640
		],
		[
            "id" =>  45,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  650
		],
		[
            "id" =>  46,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  660
		],
		[
            "id" =>  47,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  670
		],
		[
            "id" =>  48,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  670
		],
		[
            "id" =>  49,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  680
		],
		[
            "id" =>  50,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  690
		],
		[
            "id" =>  51,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  700
		],
		[
            "id" =>  52,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  710
		],
		[
            "id" =>  53,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  730
		],
		[
            "id" =>  54,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  740
		],
		[
            "id" =>  55,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  750
		],
		[
            "id" =>  56,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  760
		],
		[
            "id" =>  57,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  780
		],
		[
            "id" =>  58,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  59,
			"practice_test_id" =>  1,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  60,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  61,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  62,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  63,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  64,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  65,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  66,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  67,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  150
		],
		[
            "id" =>  68,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  69,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  70,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  71,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  72,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  73,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  74,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  75,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  76,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  77,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  78,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  79,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  80,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  81,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  82,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  230
		],
		[
            "id" =>  83,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  240
		],
		[
            "id" =>  84,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  240
		],
		[
            "id" =>  85,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  250
		],
		[
            "id" =>  86,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  250
		],
		[
            "id" =>  87,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  260
		],
		[
            "id" =>  88,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  260
		],
		[
            "id" =>  89,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  270
		],
		[
            "id" =>  90,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  280
		],
		[
            "id" =>  91,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  280
		],
		[
            "id" =>  92,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  290
		],
		[
            "id" =>  93,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  290
		],
		[
            "id" =>  94,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  300
		],
		[
            "id" =>  95,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  300
		],
		[
            "id" =>  96,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  310
		],
		[
            "id" =>  97,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  310
		],
		[
            "id" =>  98,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  320
		],
		[
            "id" =>  99,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  320
		],
		[
            "id" =>  100,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  330
		],
		[
            "id" =>  101,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  330
		],
		[
            "id" =>  102,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  340
		],
		[
            "id" =>  103,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  350
		],
		[
            "id" =>  104,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  350
		],
		[
            "id" =>  105,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  360
		],
		[
            "id" =>  106,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  370
		],
		[
            "id" =>  107,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  370
		],
		[
            "id" =>  108,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  380
		],
		[
            "id" =>  109,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  110,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  111,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  400
		],
		[
            "id" =>  112,
			"practice_test_id" =>  1,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  113,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  114,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  115,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  116,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  117,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  118,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  119,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  120,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  130
		],
		[
            "id" =>  121,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  140
		],
		[
            "id" =>  122,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  123,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  124,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  160
		],
		[
            "id" =>  125,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  126,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  127,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  128,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  129,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  130,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  131,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  132,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  133,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  134,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  135,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  136,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  137,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  138,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  139,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  140,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  141,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  280
		],
		[
            "id" =>  142,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  280
		],
		[
            "id" =>  143,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  290
		],
		[
            "id" =>  144,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  145,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  300
		],
		[
            "id" =>  146,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  147,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  320
		],
		[
            "id" =>  148,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  320
		],
		[
            "id" =>  149,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  150,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  151,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  340
		],
		[
            "id" =>  152,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  153,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  154,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  370
		],
		[
            "id" =>  155,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  156,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  157,
			"practice_test_id" =>  1,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  158,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  159,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  160,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  161,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  162,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  163,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  270
		],
		[
            "id" =>  164,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  290
		],
		[
            "id" =>  165,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  300
		],
		[
            "id" =>  166,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  320
		],
		[
            "id" =>  167,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  330
		],
		[
            "id" =>  168,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  340
		],
		[
            "id" =>  169,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  360
		],
		[
            "id" =>  170,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  370
		],
		[
            "id" =>  171,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  380
		],
		[
            "id" =>  172,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  390
		],
		[
            "id" =>  173,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  400
		],
		[
            "id" =>  174,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  420
		],
		[
            "id" =>  175,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  430
		],
		[
            "id" =>  176,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  440
		],
		[
            "id" =>  177,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  450
		],
		[
            "id" =>  178,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  460
		],
		[
            "id" =>  179,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  470
		],
		[
            "id" =>  180,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  480
		],
		[
            "id" =>  181,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  490
		],
		[
            "id" =>  182,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  500
		],
		[
            "id" =>  183,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  510
		],
		[
            "id" =>  184,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  510
		],
		[
            "id" =>  185,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  520
		],
		[
            "id" =>  186,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  530
		],
		[
            "id" =>  187,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  540
		],
		[
            "id" =>  188,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  550
		],
		[
            "id" =>  189,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  560
		],
		[
            "id" =>  190,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  570
		],
		[
            "id" =>  191,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  570
		],
		[
            "id" =>  192,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  580
		],
		[
            "id" =>  193,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  590
		],
		[
            "id" =>  194,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  600
		],
		[
            "id" =>  195,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  610
		],
		[
            "id" =>  196,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  620
		],
		[
            "id" =>  197,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  630
		],
		[
            "id" =>  198,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  640
		],
		[
            "id" =>  199,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  650
		],
		[
            "id" =>  200,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  650
		],
		[
            "id" =>  201,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  660
		],
		[
            "id" =>  202,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  670
		],
		[
            "id" =>  203,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  680
		],
		[
            "id" =>  204,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  690
		],
		[
            "id" =>  205,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  690
		],
		[
            "id" =>  206,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  700
		],
		[
            "id" =>  207,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  710
		],
		[
            "id" =>  208,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  720
		],
		[
            "id" =>  209,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  730
		],
		[
            "id" =>  210,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  740
		],
		[
            "id" =>  211,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  750
		],
		[
            "id" =>  212,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  760
		],
		[
            "id" =>  213,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  770
		],
		[
            "id" =>  214,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  780
		],
		[
            "id" =>  215,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  216,
			"practice_test_id" =>  2,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  217,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  218,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  219,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  220,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  221,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  222,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  223,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  224,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  150
		],
		[
            "id" =>  225,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  226,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  227,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  228,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  180
		],
		[
            "id" =>  229,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  230,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  231,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  232,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  233,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  234,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  235,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  236,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  237,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  238,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  239,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  230
		],
		[
            "id" =>  240,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  240
		],
		[
            "id" =>  241,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  240
		],
		[
            "id" =>  242,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  240
		],
		[
            "id" =>  243,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  250
		],
		[
            "id" =>  244,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  250
		],
		[
            "id" =>  245,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  260
		],
		[
            "id" =>  246,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  270
		],
		[
            "id" =>  247,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  270
		],
		[
            "id" =>  248,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  280
		],
		[
            "id" =>  249,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  280
		],
		[
            "id" =>  250,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  290
		],
		[
            "id" =>  251,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  290
		],
		[
            "id" =>  252,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  300
		],
		[
            "id" =>  253,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  300
		],
		[
            "id" =>  254,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  310
		],
		[
            "id" =>  255,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  310
		],
		[
            "id" =>  256,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  320
		],
		[
            "id" =>  257,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  320
		],
		[
            "id" =>  258,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  330
		],
		[
            "id" =>  259,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  330
		],
		[
            "id" =>  260,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  340
		],
		[
            "id" =>  261,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  340
		],
		[
            "id" =>  262,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  350
		],
		[
            "id" =>  263,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  350
		],
		[
            "id" =>  264,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  360
		],
		[
            "id" =>  265,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  370
		],
		[
            "id" =>  266,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  370
		],
		[
            "id" =>  267,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  380
		],
		[
            "id" =>  268,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  269,
			"practice_test_id" =>  2,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  270,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  271,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  272,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  273,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  274,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  275,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  276,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  277,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  278,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  279,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  280,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  281,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  282,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  283,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  284,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  285,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  286,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  287,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  288,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  220
		],
		[
            "id" =>  289,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  290,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  291,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  292,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  293,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  294,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  295,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  296,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  297,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  298,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  270
		],
		[
            "id" =>  299,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  280
		],
		[
            "id" =>  300,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  290
		],
		[
            "id" =>  301,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  290
		],
		[
            "id" =>  302,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  300
		],
		[
            "id" =>  303,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  304,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  310
		],
		[
            "id" =>  305,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  320
		],
		[
            "id" =>  306,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  307,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  330
		],
		[
            "id" =>  308,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  340
		],
		[
            "id" =>  309,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  310,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  311,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  370
		],
		[
            "id" =>  312,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  313,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  314,
			"practice_test_id" =>  2,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  315,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  316,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  317,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  318,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  319,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  320,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  270
		],
		[
            "id" =>  321,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  290
		],
		[
            "id" =>  322,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  300
		],
		[
            "id" =>  323,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  320
		],
		[
            "id" =>  324,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  330
		],
		[
            "id" =>  325,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  340
		],
		[
            "id" =>  326,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  360
		],
		[
            "id" =>  327,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  370
		],
		[
            "id" =>  328,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  380
		],
		[
            "id" =>  329,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  390
		],
		[
            "id" =>  330,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  410
		],
		[
            "id" =>  331,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  420
		],
		[
            "id" =>  332,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  430
		],
		[
            "id" =>  333,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  440
		],
		[
            "id" =>  334,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  450
		],
		[
            "id" =>  335,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  460
		],
		[
            "id" =>  336,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  470
		],
		[
            "id" =>  337,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  480
		],
		[
            "id" =>  338,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  490
		],
		[
            "id" =>  339,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  500
		],
		[
            "id" =>  340,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  510
		],
		[
            "id" =>  341,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  530
		],
		[
            "id" =>  342,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  540
		],
		[
            "id" =>  343,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  550
		],
		[
            "id" =>  344,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  560
		],
		[
            "id" =>  345,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  570
		],
		[
            "id" =>  346,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  580
		],
		[
            "id" =>  347,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  580
		],
		[
            "id" =>  348,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  590
		],
		[
            "id" =>  349,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  600
		],
		[
            "id" =>  350,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  610
		],
		[
            "id" =>  351,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  620
		],
		[
            "id" =>  352,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  630
		],
		[
            "id" =>  353,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  630
		],
		[
            "id" =>  354,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  640
		],
		[
            "id" =>  355,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  650
		],
		[
            "id" =>  356,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  660
		],
		[
            "id" =>  357,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  660
		],
		[
            "id" =>  358,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  670
		],
		[
            "id" =>  359,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  680
		],
		[
            "id" =>  360,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  680
		],
		[
            "id" =>  361,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  690
		],
		[
            "id" =>  362,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  690
		],
		[
            "id" =>  363,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  700
		],
		[
            "id" =>  364,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  710
		],
		[
            "id" =>  365,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  710
		],
		[
            "id" =>  366,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  720
		],
		[
            "id" =>  367,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  730
		],
		[
            "id" =>  368,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  740
		],
		[
            "id" =>  369,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  750
		],
		[
            "id" =>  370,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  770
		],
		[
            "id" =>  371,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  780
		],
		[
            "id" =>  372,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  373,
			"practice_test_id" =>  3,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  374,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  375,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  376,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  377,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  378,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  379,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  380,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  381,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  382,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  383,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  384,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  385,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  386,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  387,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  388,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  389,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  390,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  210
		],
		[
            "id" =>  391,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  392,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  220
		],
		[
            "id" =>  393,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  394,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  395,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  240
		],
		[
            "id" =>  396,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  397,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  398,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  399,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  400,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  401,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  402,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  270
		],
		[
            "id" =>  403,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  280
		],
		[
            "id" =>  404,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  280
		],
		[
            "id" =>  405,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  290
		],
		[
            "id" =>  406,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  290
		],
		[
            "id" =>  407,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  290
		],
		[
            "id" =>  408,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  300
		],
		[
            "id" =>  409,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  300
		],
		[
            "id" =>  410,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  310
		],
		[
            "id" =>  411,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  310
		],
		[
            "id" =>  412,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  320
		],
		[
            "id" =>  413,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  320
		],
		[
            "id" =>  414,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  330
		],
		[
            "id" =>  415,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  330
		],
		[
            "id" =>  416,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  340
		],
		[
            "id" =>  417,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  340
		],
		[
            "id" =>  418,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  350
		],
		[
            "id" =>  419,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  360
		],
		[
            "id" =>  420,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  360
		],
		[
            "id" =>  421,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  370
		],
		[
            "id" =>  422,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  380
		],
		[
            "id" =>  423,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  424,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  425,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  400
		],
		[
            "id" =>  426,
			"practice_test_id" =>  3,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  427,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  428,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  429,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  430,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  431,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  432,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  433,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  434,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  150
		],
		[
            "id" =>  435,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  436,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  437,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  438,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  180
		],
		[
            "id" =>  439,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  190
		],
		[
            "id" =>  440,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  441,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  200
		],
		[
            "id" =>  442,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  210
		],
		[
            "id" =>  443,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  220
		],
		[
            "id" =>  444,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  220
		],
		[
            "id" =>  445,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  230
		],
		[
            "id" =>  446,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  240
		],
		[
            "id" =>  447,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  240
		],
		[
            "id" =>  448,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  250
		],
		[
            "id" =>  449,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  250
		],
		[
            "id" =>  450,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  260
		],
		[
            "id" =>  451,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  260
		],
		[
            "id" =>  452,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  270
		],
		[
            "id" =>  453,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  270
		],
		[
            "id" =>  454,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  280
		],
		[
            "id" =>  455,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  290
		],
		[
            "id" =>  456,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  457,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  300
		],
		[
            "id" =>  458,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  459,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  310
		],
		[
            "id" =>  460,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  320
		],
		[
            "id" =>  461,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  330
		],
		[
            "id" =>  462,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  330
		],
		[
            "id" =>  463,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  340
		],
		[
            "id" =>  464,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  465,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  350
		],
		[
            "id" =>  466,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  467,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  468,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  370
		],
		[
            "id" =>  469,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  470,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  471,
			"practice_test_id" =>  3,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  472,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  473,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  474,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  475,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  476,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  477,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  270
		],
		[
            "id" =>  478,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  280
		],
		[
            "id" =>  479,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  300
		],
		[
            "id" =>  480,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  320
		],
		[
            "id" =>  481,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  340
		],
		[
            "id" =>  482,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  350
		],
		[
            "id" =>  483,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  360
		],
		[
            "id" =>  484,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  370
		],
		[
            "id" =>  485,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  390
		],
		[
            "id" =>  486,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  410
		],
		[
            "id" =>  487,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  420
		],
		[
            "id" =>  488,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  430
		],
		[
            "id" =>  489,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  450
		],
		[
            "id" =>  490,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  460
		],
		[
            "id" =>  491,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  470
		],
		[
            "id" =>  492,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  480
		],
		[
            "id" =>  493,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  490
		],
		[
            "id" =>  494,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  500
		],
		[
            "id" =>  495,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  510
		],
		[
            "id" =>  496,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  520
		],
		[
            "id" =>  497,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  530
		],
		[
            "id" =>  498,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  540
		],
		[
            "id" =>  499,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  550
		],
		[
            "id" =>  500,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  560
		],
		[
            "id" =>  501,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  570
		],
		[
            "id" =>  502,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  580
		],
		[
            "id" =>  503,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  590
		],
		[
            "id" =>  504,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  600
		],
		[
            "id" =>  505,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  600
		],
		[
            "id" =>  506,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  610
		],
		[
            "id" =>  507,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  620
		],
		[
            "id" =>  508,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  630
		],
		[
            "id" =>  509,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  640
		],
		[
            "id" =>  510,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  650
		],
		[
            "id" =>  511,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  660
		],
		[
            "id" =>  512,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  670
		],
		[
            "id" =>  513,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  680
		],
		[
            "id" =>  514,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  690
		],
		[
            "id" =>  515,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  700
		],
		[
            "id" =>  516,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  710
		],
		[
            "id" =>  517,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  710
		],
		[
            "id" =>  518,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  720
		],
		[
            "id" =>  519,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  730
		],
		[
            "id" =>  520,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  730
		],
		[
            "id" =>  521,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  740
		],
		[
            "id" =>  522,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  750
		],
		[
            "id" =>  523,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  750
		],
		[
            "id" =>  524,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  760
		],
		[
            "id" =>  525,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  770
		],
		[
            "id" =>  526,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  780
		],
		[
            "id" =>  527,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  790
		],
		[
            "id" =>  528,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  790
		],
		[
            "id" =>  529,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  800
		],
		[
            "id" =>  530,
			"practice_test_id" =>  4,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  531,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  532,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  533,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  534,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  535,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  536,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  537,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  140
		],
		[
            "id" =>  538,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  150
		],
		[
            "id" =>  539,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  160
		],
		[
            "id" =>  540,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  541,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  542,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  180
		],
		[
            "id" =>  543,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  544,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  545,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  200
		],
		[
            "id" =>  546,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  547,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  210
		],
		[
            "id" =>  548,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  549,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  220
		],
		[
            "id" =>  550,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  551,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  552,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  553,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  230
		],
		[
            "id" =>  554,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  240
		],
		[
            "id" =>  555,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  240
		],
		[
            "id" =>  556,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  250
		],
		[
            "id" =>  557,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  250
		],
		[
            "id" =>  558,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  260
		],
		[
            "id" =>  559,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  260
		],
		[
            "id" =>  560,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  270
		],
		[
            "id" =>  561,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  270
		],
		[
            "id" =>  562,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  280
		],
		[
            "id" =>  563,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  280
		],
		[
            "id" =>  564,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  280
		],
		[
            "id" =>  565,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  290
		],
		[
            "id" =>  566,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  290
		],
		[
            "id" =>  567,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  300
		],
		[
            "id" =>  568,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  300
		],
		[
            "id" =>  569,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  310
		],
		[
            "id" =>  570,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  310
		],
		[
            "id" =>  571,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  320
		],
		[
            "id" =>  572,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  320
		],
		[
            "id" =>  573,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  330
		],
		[
            "id" =>  574,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  330
		],
		[
            "id" =>  575,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  340
		],
		[
            "id" =>  576,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  350
		],
		[
            "id" =>  577,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  350
		],
		[
            "id" =>  578,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  360
		],
		[
            "id" =>  579,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  370
		],
		[
            "id" =>  580,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  581,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  582,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  583,
			"practice_test_id" =>  4,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  584,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  585,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  586,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  587,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  588,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  589,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  590,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  591,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  592,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  593,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  594,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  595,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  596,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  597,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  598,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  599,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  600,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  210
		],
		[
            "id" =>  601,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  220
		],
		[
            "id" =>  602,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  230
		],
		[
            "id" =>  603,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  230
		],
		[
            "id" =>  604,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  240
		],
		[
            "id" =>  605,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  240
		],
		[
            "id" =>  606,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  250
		],
		[
            "id" =>  607,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  260
		],
		[
            "id" =>  608,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  260
		],
		[
            "id" =>  609,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  270
		],
		[
            "id" =>  610,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  270
		],
		[
            "id" =>  611,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  280
		],
		[
            "id" =>  612,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  290
		],
		[
            "id" =>  613,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  614,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  300
		],
		[
            "id" =>  615,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  310
		],
		[
            "id" =>  616,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  310
		],
		[
            "id" =>  617,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  320
		],
		[
            "id" =>  618,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  320
		],
		[
            "id" =>  619,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  330
		],
		[
            "id" =>  620,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  621,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  622,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  350
		],
		[
            "id" =>  623,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  360
		],
		[
            "id" =>  624,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  370
		],
		[
            "id" =>  625,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  370
		],
		[
            "id" =>  626,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  627,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  628,
			"practice_test_id" =>  4,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  629,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  630,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  631,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  632,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  633,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  634,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  260
		],
		[
            "id" =>  635,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  270
		],
		[
            "id" =>  636,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  290
		],
		[
            "id" =>  637,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  300
		],
		[
            "id" =>  638,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  320
		],
		[
            "id" =>  639,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  330
		],
		[
            "id" =>  640,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  340
		],
		[
            "id" =>  641,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  360
		],
		[
            "id" =>  642,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  370
		],
		[
            "id" =>  643,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  390
		],
		[
            "id" =>  644,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  400
		],
		[
            "id" =>  645,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  410
		],
		[
            "id" =>  646,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  420
		],
		[
            "id" =>  647,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  430
		],
		[
            "id" =>  648,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  440
		],
		[
            "id" =>  649,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  450
		],
		[
            "id" =>  650,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  460
		],
		[
            "id" =>  651,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  470
		],
		[
            "id" =>  652,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  480
		],
		[
            "id" =>  653,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  490
		],
		[
            "id" =>  654,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  500
		],
		[
            "id" =>  655,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  510
		],
		[
            "id" =>  656,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  510
		],
		[
            "id" =>  657,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  520
		],
		[
            "id" =>  658,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  530
		],
		[
            "id" =>  659,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  540
		],
		[
            "id" =>  660,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  540
		],
		[
            "id" =>  661,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  550
		],
		[
            "id" =>  662,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  560
		],
		[
            "id" =>  663,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  570
		],
		[
            "id" =>  664,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  580
		],
		[
            "id" =>  665,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  590
		],
		[
            "id" =>  666,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  600
		],
		[
            "id" =>  667,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  600
		],
		[
            "id" =>  668,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  610
		],
		[
            "id" =>  669,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  620
		],
		[
            "id" =>  670,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  630
		],
		[
            "id" =>  671,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  640
		],
		[
            "id" =>  672,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  650
		],
		[
            "id" =>  673,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  660
		],
		[
            "id" =>  674,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  660
		],
		[
            "id" =>  675,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  670
		],
		[
            "id" =>  676,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  680
		],
		[
            "id" =>  677,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  690
		],
		[
            "id" =>  678,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  700
		],
		[
            "id" =>  679,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  710
		],
		[
            "id" =>  680,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  710
		],
		[
            "id" =>  681,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  720
		],
		[
            "id" =>  682,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  730
		],
		[
            "id" =>  683,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  750
		],
		[
            "id" =>  684,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  760
		],
		[
            "id" =>  685,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  770
		],
		[
            "id" =>  686,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  687,
			"practice_test_id" =>  5,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  688,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  689,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  690,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  691,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  692,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  693,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  110
		],
		[
            "id" =>  694,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  120
		],
		[
            "id" =>  695,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  130
		],
		[
            "id" =>  696,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  140
		],
		[
            "id" =>  697,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  140
		],
		[
            "id" =>  698,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  150
		],
		[
            "id" =>  699,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  160
		],
		[
            "id" =>  700,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  160
		],
		[
            "id" =>  701,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  170
		],
		[
            "id" =>  702,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  170
		],
		[
            "id" =>  703,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  180
		],
		[
            "id" =>  704,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  180
		],
		[
            "id" =>  705,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  190
		],
		[
            "id" =>  706,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  200
		],
		[
            "id" =>  707,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  200
		],
		[
            "id" =>  708,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  210
		],
		[
            "id" =>  709,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  210
		],
		[
            "id" =>  710,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  220
		],
		[
            "id" =>  711,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  230
		],
		[
            "id" =>  712,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  230
		],
		[
            "id" =>  713,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  240
		],
		[
            "id" =>  714,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  240
		],
		[
            "id" =>  715,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  250
		],
		[
            "id" =>  716,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  250
		],
		[
            "id" =>  717,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  260
		],
		[
            "id" =>  718,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  260
		],
		[
            "id" =>  719,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  270
		],
		[
            "id" =>  720,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  280
		],
		[
            "id" =>  721,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  280
		],
		[
            "id" =>  722,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  290
		],
		[
            "id" =>  723,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  290
		],
		[
            "id" =>  724,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  290
		],
		[
            "id" =>  725,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  300
		],
		[
            "id" =>  726,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  300
		],
		[
            "id" =>  727,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  310
		],
		[
            "id" =>  728,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  310
		],
		[
            "id" =>  729,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  320
		],
		[
            "id" =>  730,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  320
		],
		[
            "id" =>  731,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  330
		],
		[
            "id" =>  732,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  330
		],
		[
            "id" =>  733,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  340
		],
		[
            "id" =>  734,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  350
		],
		[
            "id" =>  735,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  350
		],
		[
            "id" =>  736,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  360
		],
		[
            "id" =>  737,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  370
		],
		[
            "id" =>  738,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  370
		],
		[
            "id" =>  739,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  740,
			"practice_test_id" =>  5,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  741,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  742,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  743,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  744,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  745,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  746,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  747,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  748,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  130
		],
		[
            "id" =>  749,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  140
		],
		[
            "id" =>  750,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  751,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  752,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  160
		],
		[
            "id" =>  753,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  754,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  755,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  180
		],
		[
            "id" =>  756,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  757,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  758,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  759,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  760,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  761,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  762,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  763,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  764,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  765,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  766,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  767,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  270
		],
		[
            "id" =>  768,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  280
		],
		[
            "id" =>  769,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  280
		],
		[
            "id" =>  770,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  771,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  300
		],
		[
            "id" =>  772,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  773,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  310
		],
		[
            "id" =>  774,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  320
		],
		[
            "id" =>  775,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  320
		],
		[
            "id" =>  776,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  330
		],
		[
            "id" =>  777,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  340
		],
		[
            "id" =>  778,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  779,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  350
		],
		[
            "id" =>  780,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  360
		],
		[
            "id" =>  781,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  370
		],
		[
            "id" =>  782,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  380
		],
		[
            "id" =>  783,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  390
		],
		[
            "id" =>  784,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  400
		],
		[
            "id" =>  785,
			"practice_test_id" =>  5,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  786,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  787,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  788,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  789,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  790,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  791,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  260
		],
		[
            "id" =>  792,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  280
		],
		[
            "id" =>  793,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  290
		],
		[
            "id" =>  794,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  310
		],
		[
            "id" =>  795,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  320
		],
		[
            "id" =>  796,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  330
		],
		[
            "id" =>  797,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  340
		],
		[
            "id" =>  798,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  350
		],
		[
            "id" =>  799,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  360
		],
		[
            "id" =>  800,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  380
		],
		[
            "id" =>  801,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  390
		],
		[
            "id" =>  802,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  400
		],
		[
            "id" =>  803,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  410
		],
		[
            "id" =>  804,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  420
		],
		[
            "id" =>  805,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  430
		],
		[
            "id" =>  806,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  440
		],
		[
            "id" =>  807,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  450
		],
		[
            "id" =>  808,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  460
		],
		[
            "id" =>  809,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  470
		],
		[
            "id" =>  810,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  490
		],
		[
            "id" =>  811,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  500
		],
		[
            "id" =>  812,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  510
		],
		[
            "id" =>  813,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  510
		],
		[
            "id" =>  814,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  520
		],
		[
            "id" =>  815,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  530
		],
		[
            "id" =>  816,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  530
		],
		[
            "id" =>  817,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  540
		],
		[
            "id" =>  818,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  550
		],
		[
            "id" =>  819,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  560
		],
		[
            "id" =>  820,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  570
		],
		[
            "id" =>  821,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  580
		],
		[
            "id" =>  822,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  590
		],
		[
            "id" =>  823,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  590
		],
		[
            "id" =>  824,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  600
		],
		[
            "id" =>  825,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  610
		],
		[
            "id" =>  826,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  620
		],
		[
            "id" =>  827,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  630
		],
		[
            "id" =>  828,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  640
		],
		[
            "id" =>  829,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  650
		],
		[
            "id" =>  830,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  660
		],
		[
            "id" =>  831,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  670
		],
		[
            "id" =>  832,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  670
		],
		[
            "id" =>  833,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  680
		],
		[
            "id" =>  834,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  690
		],
		[
            "id" =>  835,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  700
		],
		[
            "id" =>  836,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  710
		],
		[
            "id" =>  837,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  720
		],
		[
            "id" =>  838,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  730
		],
		[
            "id" =>  839,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  740
		],
		[
            "id" =>  840,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  760
		],
		[
            "id" =>  841,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  770
		],
		[
            "id" =>  842,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  780
		],
		[
            "id" =>  843,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  844,
			"practice_test_id" =>  6,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  845,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  846,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  847,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  848,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  849,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  850,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  851,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  852,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  853,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  854,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  855,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  856,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  857,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  858,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  859,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  180
		],
		[
            "id" =>  860,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  861,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  190
		],
		[
            "id" =>  862,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  863,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  200
		],
		[
            "id" =>  864,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  210
		],
		[
            "id" =>  865,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  210
		],
		[
            "id" =>  866,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  220
		],
		[
            "id" =>  867,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  220
		],
		[
            "id" =>  868,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  230
		],
		[
            "id" =>  869,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  230
		],
		[
            "id" =>  870,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  240
		],
		[
            "id" =>  871,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  240
		],
		[
            "id" =>  872,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  250
		],
		[
            "id" =>  873,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  250
		],
		[
            "id" =>  874,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  260
		],
		[
            "id" =>  875,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  260
		],
		[
            "id" =>  876,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  270
		],
		[
            "id" =>  877,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  270
		],
		[
            "id" =>  878,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  280
		],
		[
            "id" =>  879,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  280
		],
		[
            "id" =>  880,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  290
		],
		[
            "id" =>  881,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  290
		],
		[
            "id" =>  882,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  300
		],
		[
            "id" =>  883,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  300
		],
		[
            "id" =>  884,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  310
		],
		[
            "id" =>  885,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  310
		],
		[
            "id" =>  886,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  320
		],
		[
            "id" =>  887,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  330
		],
		[
            "id" =>  888,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  330
		],
		[
            "id" =>  889,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  340
		],
		[
            "id" =>  890,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  350
		],
		[
            "id" =>  891,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  360
		],
		[
            "id" =>  892,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  370
		],
		[
            "id" =>  893,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  370
		],
		[
            "id" =>  894,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  895,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  896,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  400
		],
		[
            "id" =>  897,
			"practice_test_id" =>  6,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  898,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  899,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  900,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  901,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  902,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  903,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  904,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  905,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  906,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  907,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  908,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  909,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  910,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  911,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  912,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  913,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  914,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  915,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  916,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  220
		],
		[
            "id" =>  917,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  230
		],
		[
            "id" =>  918,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  919,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  240
		],
		[
            "id" =>  920,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  250
		],
		[
            "id" =>  921,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  922,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  260
		],
		[
            "id" =>  923,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  270
		],
		[
            "id" =>  924,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  270
		],
		[
            "id" =>  925,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  280
		],
		[
            "id" =>  926,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  280
		],
		[
            "id" =>  927,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  928,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  300
		],
		[
            "id" =>  929,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  930,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  310
		],
		[
            "id" =>  931,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  932,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  320
		],
		[
            "id" =>  933,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  330
		],
		[
            "id" =>  934,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  340
		],
		[
            "id" =>  935,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  936,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  350
		],
		[
            "id" =>  937,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  360
		],
		[
            "id" =>  938,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  939,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  380
		],
		[
            "id" =>  940,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  390
		],
		[
            "id" =>  941,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  942,
			"practice_test_id" =>  6,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  943,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  944,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  200
		],
		[
            "id" =>  945,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  210
		],
		[
            "id" =>  946,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  947,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  948,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  260
		],
		[
            "id" =>  949,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  280
		],
		[
            "id" =>  950,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  290
		],
		[
            "id" =>  951,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  310
		],
		[
            "id" =>  952,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  320
		],
		[
            "id" =>  953,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  330
		],
		[
            "id" =>  954,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  350
		],
		[
            "id" =>  955,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  360
		],
		[
            "id" =>  956,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  370
		],
		[
            "id" =>  957,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  380
		],
		[
            "id" =>  958,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  390
		],
		[
            "id" =>  959,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  400
		],
		[
            "id" =>  960,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  420
		],
		[
            "id" =>  961,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  430
		],
		[
            "id" =>  962,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  430
		],
		[
            "id" =>  963,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  440
		],
		[
            "id" =>  964,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  450
		],
		[
            "id" =>  965,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  460
		],
		[
            "id" =>  966,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  470
		],
		[
            "id" =>  967,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  480
		],
		[
            "id" =>  968,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  490
		],
		[
            "id" =>  969,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  500
		],
		[
            "id" =>  970,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  510
		],
		[
            "id" =>  971,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  510
		],
		[
            "id" =>  972,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  520
		],
		[
            "id" =>  973,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  530
		],
		[
            "id" =>  974,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  530
		],
		[
            "id" =>  975,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  540
		],
		[
            "id" =>  976,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  550
		],
		[
            "id" =>  977,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  550
		],
		[
            "id" =>  978,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  560
		],
		[
            "id" =>  979,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  570
		],
		[
            "id" =>  980,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  580
		],
		[
            "id" =>  981,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  590
		],
		[
            "id" =>  982,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  590
		],
		[
            "id" =>  983,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  600
		],
		[
            "id" =>  984,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  610
		],
		[
            "id" =>  985,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  620
		],
		[
            "id" =>  986,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  630
		],
		[
            "id" =>  987,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  640
		],
		[
            "id" =>  988,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  650
		],
		[
            "id" =>  989,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  660
		],
		[
            "id" =>  990,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  670
		],
		[
            "id" =>  991,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  680
		],
		[
            "id" =>  992,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  680
		],
		[
            "id" =>  993,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  690
		],
		[
            "id" =>  994,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  700
		],
		[
            "id" =>  995,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  720
		],
		[
            "id" =>  996,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  730
		],
		[
            "id" =>  997,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  740
		],
		[
            "id" =>  998,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  760
		],
		[
            "id" =>  999,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  770
		],
		[
            "id" =>  1000,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  790
		],
		[
            "id" =>  1001,
			"practice_test_id" =>  7,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  1002,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1003,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1004,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1005,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  1006,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  1007,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  1008,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  1009,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  1010,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  1011,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  1012,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  1013,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  1014,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  1015,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  1016,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  180
		],
		[
            "id" =>  1017,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  1018,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  1019,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  1020,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  1021,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  210
		],
		[
            "id" =>  1022,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  1023,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  220
		],
		[
            "id" =>  1024,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  230
		],
		[
            "id" =>  1025,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  230
		],
		[
            "id" =>  1026,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  240
		],
		[
            "id" =>  1027,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  240
		],
		[
            "id" =>  1028,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  250
		],
		[
            "id" =>  1029,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  250
		],
		[
            "id" =>  1030,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  260
		],
		[
            "id" =>  1031,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  260
		],
		[
            "id" =>  1032,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  270
		],
		[
            "id" =>  1033,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  270
		],
		[
            "id" =>  1034,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  280
		],
		[
            "id" =>  1035,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  280
		],
		[
            "id" =>  1036,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  290
		],
		[
            "id" =>  1037,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  290
		],
		[
            "id" =>  1038,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  300
		],
		[
            "id" =>  1039,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  300
		],
		[
            "id" =>  1040,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  310
		],
		[
            "id" =>  1041,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  310
		],
		[
            "id" =>  1042,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  320
		],
		[
            "id" =>  1043,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  320
		],
		[
            "id" =>  1044,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  330
		],
		[
            "id" =>  1045,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  340
		],
		[
            "id" =>  1046,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  350
		],
		[
            "id" =>  1047,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  350
		],
		[
            "id" =>  1048,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  360
		],
		[
            "id" =>  1049,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  370
		],
		[
            "id" =>  1050,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  370
		],
		[
            "id" =>  1051,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  1052,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  1053,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  1054,
			"practice_test_id" =>  7,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  1055,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1056,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1057,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1058,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  1059,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  1060,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  1061,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  120
		],
		[
            "id" =>  1062,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  130
		],
		[
            "id" =>  1063,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  140
		],
		[
            "id" =>  1064,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  1065,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  150
		],
		[
            "id" =>  1066,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  160
		],
		[
            "id" =>  1067,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  1068,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  1069,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  180
		],
		[
            "id" =>  1070,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  1071,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  190
		],
		[
            "id" =>  1072,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  1073,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  1074,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  1075,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  1076,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  1077,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  1078,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  1079,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  1080,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  1081,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  1082,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  1083,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  280
		],
		[
            "id" =>  1084,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  1085,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  290
		],
		[
            "id" =>  1086,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  1087,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  310
		],
		[
            "id" =>  1088,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  1089,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  320
		],
		[
            "id" =>  1090,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  320
		],
		[
            "id" =>  1091,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  1092,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  340
		],
		[
            "id" =>  1093,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  340
		],
		[
            "id" =>  1094,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  1095,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  1096,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  360
		],
		[
            "id" =>  1097,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  370
		],
		[
            "id" =>  1098,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  1099,
			"practice_test_id" =>  7,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  1100,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  1101,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  210
		],
		[
            "id" =>  1102,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  220
		],
		[
            "id" =>  1103,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  240
		],
		[
            "id" =>  1104,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  1105,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  270
		],
		[
            "id" =>  1106,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  290
		],
		[
            "id" =>  1107,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  300
		],
		[
            "id" =>  1108,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  320
		],
		[
            "id" =>  1109,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  340
		],
		[
            "id" =>  1110,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  350
		],
		[
            "id" =>  1111,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  360
		],
		[
            "id" =>  1112,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  380
		],
		[
            "id" =>  1113,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  390
		],
		[
            "id" =>  1114,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  400
		],
		[
            "id" =>  1115,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  420
		],
		[
            "id" =>  1116,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  430
		],
		[
            "id" =>  1117,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  440
		],
		[
            "id" =>  1118,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  450
		],
		[
            "id" =>  1119,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  460
		],
		[
            "id" =>  1120,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  470
		],
		[
            "id" =>  1121,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  480
		],
		[
            "id" =>  1122,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  490
		],
		[
            "id" =>  1123,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  500
		],
		[
            "id" =>  1124,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  510
		],
		[
            "id" =>  1125,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  520
		],
		[
            "id" =>  1126,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  520
		],
		[
            "id" =>  1127,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  530
		],
		[
            "id" =>  1128,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  540
		],
		[
            "id" =>  1129,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  540
		],
		[
            "id" =>  1130,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  550
		],
		[
            "id" =>  1131,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  560
		],
		[
            "id" =>  1132,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  570
		],
		[
            "id" =>  1133,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  580
		],
		[
            "id" =>  1134,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  580
		],
		[
            "id" =>  1135,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  590
		],
		[
            "id" =>  1136,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  600
		],
		[
            "id" =>  1137,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  610
		],
		[
            "id" =>  1138,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  620
		],
		[
            "id" =>  1139,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  630
		],
		[
            "id" =>  1140,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  640
		],
		[
            "id" =>  1141,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  650
		],
		[
            "id" =>  1142,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  660
		],
		[
            "id" =>  1143,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  670
		],
		[
            "id" =>  1144,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  680
		],
		[
            "id" =>  1145,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  680
		],
		[
            "id" =>  1146,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  690
		],
		[
            "id" =>  1147,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  700
		],
		[
            "id" =>  1148,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  710
		],
		[
            "id" =>  1149,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  730
		],
		[
            "id" =>  1150,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  740
		],
		[
            "id" =>  1151,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  750
		],
		[
            "id" =>  1152,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  770
		],
		[
            "id" =>  1153,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  780
		],
		[
            "id" =>  1154,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  790
		],
		[
            "id" =>  1155,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  790
		],
		[
            "id" =>  1156,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  800
		],
		[
            "id" =>  1157,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  800
		],
		[
            "id" =>  1158,
			"practice_test_id" =>  8,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  1159,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1160,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1161,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1162,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  1163,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  1164,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  1165,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  1166,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  1167,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  1168,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  1169,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  1170,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  1171,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  1172,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  1173,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  180
		],
		[
            "id" =>  1174,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  1175,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  190
		],
		[
            "id" =>  1176,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  1177,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  200
		],
		[
            "id" =>  1178,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  210
		],
		[
            "id" =>  1179,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  210
		],
		[
            "id" =>  1180,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  220
		],
		[
            "id" =>  1181,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  220
		],
		[
            "id" =>  1182,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  230
		],
		[
            "id" =>  1183,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  230
		],
		[
            "id" =>  1184,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  240
		],
		[
            "id" =>  1185,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  240
		],
		[
            "id" =>  1186,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  250
		],
		[
            "id" =>  1187,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  250
		],
		[
            "id" =>  1188,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  260
		],
		[
            "id" =>  1189,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  260
		],
		[
            "id" =>  1190,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  270
		],
		[
            "id" =>  1191,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  270
		],
		[
            "id" =>  1192,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  280
		],
		[
            "id" =>  1193,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  280
		],
		[
            "id" =>  1194,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  290
		],
		[
            "id" =>  1195,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  290
		],
		[
            "id" =>  1196,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  290
		],
		[
            "id" =>  1197,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  300
		],
		[
            "id" =>  1198,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  300
		],
		[
            "id" =>  1199,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  310
		],
		[
            "id" =>  1200,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  310
		],
		[
            "id" =>  1201,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  320
		],
		[
            "id" =>  1202,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  330
		],
		[
            "id" =>  1203,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  330
		],
		[
            "id" =>  1204,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  340
		],
		[
            "id" =>  1205,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  350
		],
		[
            "id" =>  1206,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  350
		],
		[
            "id" =>  1207,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  360
		],
		[
            "id" =>  1208,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  370
		],
		[
            "id" =>  1209,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  380
		],
		[
            "id" =>  1210,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  1211,
			"practice_test_id" =>  8,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  1212,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1213,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1214,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1215,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  1216,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  1217,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  1218,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  1219,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  1220,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  140
		],
		[
            "id" =>  1221,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  1222,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  1223,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  1224,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  1225,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  1226,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  1227,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  1228,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  1229,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  210
		],
		[
            "id" =>  1230,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  1231,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  1232,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  1233,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  1234,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  1235,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  240
		],
		[
            "id" =>  1236,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  1237,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  250
		],
		[
            "id" =>  1238,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  1239,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  1240,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  270
		],
		[
            "id" =>  1241,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  280
		],
		[
            "id" =>  1242,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  290
		],
		[
            "id" =>  1243,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  290
		],
		[
            "id" =>  1244,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  300
		],
		[
            "id" =>  1245,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  1246,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  310
		],
		[
            "id" =>  1247,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  320
		],
		[
            "id" =>  1248,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  1249,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  330
		],
		[
            "id" =>  1250,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  340
		],
		[
            "id" =>  1251,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  1252,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  360
		],
		[
            "id" =>  1253,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  370
		],
		[
            "id" =>  1254,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  1255,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  1256,
			"practice_test_id" =>  8,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		],
		[
            "id" =>  1257,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  0,
			"equating_score" =>  200
		],
		[
            "id" =>  1258,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  1,
			"equating_score" =>  210
		],
		[
            "id" =>  1259,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  2,
			"equating_score" =>  220
		],
		[
            "id" =>  1260,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  3,
			"equating_score" =>  230
		],
		[
            "id" =>  1261,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  4,
			"equating_score" =>  250
		],
		[
            "id" =>  1262,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  5,
			"equating_score" =>  260
		],
		[
            "id" =>  1263,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  6,
			"equating_score" =>  280
		],
		[
            "id" =>  1264,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  7,
			"equating_score" =>  290
		],
		[
            "id" =>  1265,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  8,
			"equating_score" =>  310
		],
		[
            "id" =>  1266,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  9,
			"equating_score" =>  320
		],
		[
            "id" =>  1267,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  10,
			"equating_score" =>  340
		],
		[
            "id" =>  1268,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  11,
			"equating_score" =>  350
		],
		[
            "id" =>  1269,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  12,
			"equating_score" =>  360
		],
		[
            "id" =>  1270,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  13,
			"equating_score" =>  380
		],
		[
            "id" =>  1271,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  14,
			"equating_score" =>  390
		],
		[
            "id" =>  1272,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  15,
			"equating_score" =>  400
		],
		[
            "id" =>  1273,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  16,
			"equating_score" =>  420
		],
		[
            "id" =>  1274,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  17,
			"equating_score" =>  430
		],
		[
            "id" =>  1275,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  18,
			"equating_score" =>  440
		],
		[
            "id" =>  1276,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  19,
			"equating_score" =>  450
		],
		[
            "id" =>  1277,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  20,
			"equating_score" =>  460
		],
		[
            "id" =>  1278,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  21,
			"equating_score" =>  470
		],
		[
            "id" =>  1279,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  22,
			"equating_score" =>  480
		],
		[
            "id" =>  1280,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  23,
			"equating_score" =>  490
		],
		[
            "id" =>  1281,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  24,
			"equating_score" =>  500
		],
		[
            "id" =>  1282,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  25,
			"equating_score" =>  510
		],
		[
            "id" =>  1283,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  26,
			"equating_score" =>  520
		],
		[
            "id" =>  1284,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  27,
			"equating_score" =>  520
		],
		[
            "id" =>  1285,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  28,
			"equating_score" =>  530
		],
		[
            "id" =>  1286,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  29,
			"equating_score" =>  540
		],
		[
            "id" =>  1287,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  30,
			"equating_score" =>  540
		],
		[
            "id" =>  1288,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  31,
			"equating_score" =>  550
		],
		[
            "id" =>  1289,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  32,
			"equating_score" =>  560
		],
		[
            "id" =>  1290,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  33,
			"equating_score" =>  570
		],
		[
            "id" =>  1291,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  34,
			"equating_score" =>  580
		],
		[
            "id" =>  1292,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  35,
			"equating_score" =>  590
		],
		[
            "id" =>  1293,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  36,
			"equating_score" =>  590
		],
		[
            "id" =>  1294,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  37,
			"equating_score" =>  600
		],
		[
            "id" =>  1295,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  38,
			"equating_score" =>  610
		],
		[
            "id" =>  1296,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  39,
			"equating_score" =>  620
		],
		[
            "id" =>  1297,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  40,
			"equating_score" =>  630
		],
		[
            "id" =>  1298,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  41,
			"equating_score" =>  640
		],
		[
            "id" =>  1299,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  42,
			"equating_score" =>  650
		],
		[
            "id" =>  1300,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  43,
			"equating_score" =>  650
		],
		[
            "id" =>  1301,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  44,
			"equating_score" =>  660
		],
		[
            "id" =>  1302,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  45,
			"equating_score" =>  670
		],
		[
            "id" =>  1303,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  46,
			"equating_score" =>  680
		],
		[
            "id" =>  1304,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  47,
			"equating_score" =>  690
		],
		[
            "id" =>  1305,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  48,
			"equating_score" =>  700
		],
		[
            "id" =>  1306,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  49,
			"equating_score" =>  710
		],
		[
            "id" =>  1307,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  50,
			"equating_score" =>  720
		],
		[
            "id" =>  1308,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  51,
			"equating_score" =>  730
		],
		[
            "id" =>  1309,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  52,
			"equating_score" =>  740
		],
		[
            "id" =>  1310,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  53,
			"equating_score" =>  750
		],
		[
            "id" =>  1311,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  54,
			"equating_score" =>  770
		],
		[
            "id" =>  1312,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  55,
			"equating_score" =>  780
		],
		[
            "id" =>  1313,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  56,
			"equating_score" =>  790
		],
		[
            "id" =>  1314,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  57,
			"equating_score" =>  800
		],
		[
            "id" =>  1315,
			"practice_test_id" =>  15,
			"subject_id" =>  3,
			"raw_score" =>  58,
			"equating_score" =>  800
		],
		[
            "id" =>  1316,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1317,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1318,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1319,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  3,
			"equating_score" =>  100
		],
		[
            "id" =>  1320,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  4,
			"equating_score" =>  110
		],
		[
            "id" =>  1321,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  5,
			"equating_score" =>  120
		],
		[
            "id" =>  1322,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  1323,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  1324,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  1325,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  9,
			"equating_score" =>  150
		],
		[
            "id" =>  1326,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  10,
			"equating_score" =>  160
		],
		[
            "id" =>  1327,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  11,
			"equating_score" =>  170
		],
		[
            "id" =>  1328,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  12,
			"equating_score" =>  170
		],
		[
            "id" =>  1329,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  13,
			"equating_score" =>  180
		],
		[
            "id" =>  1330,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  14,
			"equating_score" =>  190
		],
		[
            "id" =>  1331,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  15,
			"equating_score" =>  190
		],
		[
            "id" =>  1332,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  16,
			"equating_score" =>  200
		],
		[
            "id" =>  1333,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  17,
			"equating_score" =>  200
		],
		[
            "id" =>  1334,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  18,
			"equating_score" =>  210
		],
		[
            "id" =>  1335,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  19,
			"equating_score" =>  220
		],
		[
            "id" =>  1336,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  20,
			"equating_score" =>  220
		],
		[
            "id" =>  1337,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  21,
			"equating_score" =>  230
		],
		[
            "id" =>  1338,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  22,
			"equating_score" =>  240
		],
		[
            "id" =>  1339,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  23,
			"equating_score" =>  240
		],
		[
            "id" =>  1340,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  24,
			"equating_score" =>  250
		],
		[
            "id" =>  1341,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  25,
			"equating_score" =>  250
		],
		[
            "id" =>  1342,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  26,
			"equating_score" =>  260
		],
		[
            "id" =>  1343,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  1344,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  28,
			"equating_score" =>  270
		],
		[
            "id" =>  1345,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  29,
			"equating_score" =>  280
		],
		[
            "id" =>  1346,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  30,
			"equating_score" =>  280
		],
		[
            "id" =>  1347,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  31,
			"equating_score" =>  290
		],
		[
            "id" =>  1348,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  32,
			"equating_score" =>  290
		],
		[
            "id" =>  1349,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  33,
			"equating_score" =>  300
		],
		[
            "id" =>  1350,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  34,
			"equating_score" =>  300
		],
		[
            "id" =>  1351,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  35,
			"equating_score" =>  310
		],
		[
            "id" =>  1352,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  36,
			"equating_score" =>  310
		],
		[
            "id" =>  1353,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  37,
			"equating_score" =>  320
		],
		[
            "id" =>  1354,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  38,
			"equating_score" =>  320
		],
		[
            "id" =>  1355,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  39,
			"equating_score" =>  330
		],
		[
            "id" =>  1356,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  40,
			"equating_score" =>  330
		],
		[
            "id" =>  1357,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  41,
			"equating_score" =>  340
		],
		[
            "id" =>  1358,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  42,
			"equating_score" =>  340
		],
		[
            "id" =>  1359,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  43,
			"equating_score" =>  350
		],
		[
            "id" =>  1360,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  44,
			"equating_score" =>  350
		],
		[
            "id" =>  1361,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  45,
			"equating_score" =>  360
		],
		[
            "id" =>  1362,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  46,
			"equating_score" =>  360
		],
		[
            "id" =>  1363,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  47,
			"equating_score" =>  370
		],
		[
            "id" =>  1364,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  48,
			"equating_score" =>  370
		],
		[
            "id" =>  1365,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  49,
			"equating_score" =>  380
		],
		[
            "id" =>  1366,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  50,
			"equating_score" =>  390
		],
		[
            "id" =>  1367,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  51,
			"equating_score" =>  390
		],
		[
            "id" =>  1368,
			"practice_test_id" =>  15,
			"subject_id" =>  1,
			"raw_score" =>  52,
			"equating_score" =>  400
		],
		[
            "id" =>  1369,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  0,
			"equating_score" =>  100
		],
		[
            "id" =>  1370,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  1,
			"equating_score" =>  100
		],
		[
            "id" =>  1371,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  2,
			"equating_score" =>  100
		],
		[
            "id" =>  1372,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  3,
			"equating_score" =>  110
		],
		[
            "id" =>  1373,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  4,
			"equating_score" =>  120
		],
		[
            "id" =>  1374,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  5,
			"equating_score" =>  130
		],
		[
            "id" =>  1375,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  6,
			"equating_score" =>  130
		],
		[
            "id" =>  1376,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  7,
			"equating_score" =>  140
		],
		[
            "id" =>  1377,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  8,
			"equating_score" =>  150
		],
		[
            "id" =>  1378,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  9,
			"equating_score" =>  160
		],
		[
            "id" =>  1379,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  10,
			"equating_score" =>  170
		],
		[
            "id" =>  1380,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  11,
			"equating_score" =>  180
		],
		[
            "id" =>  1381,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  12,
			"equating_score" =>  180
		],
		[
            "id" =>  1382,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  13,
			"equating_score" =>  190
		],
		[
            "id" =>  1383,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  14,
			"equating_score" =>  200
		],
		[
            "id" =>  1384,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  15,
			"equating_score" =>  200
		],
		[
            "id" =>  1385,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  16,
			"equating_score" =>  210
		],
		[
            "id" =>  1386,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  17,
			"equating_score" =>  220
		],
		[
            "id" =>  1387,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  18,
			"equating_score" =>  220
		],
		[
            "id" =>  1388,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  19,
			"equating_score" =>  230
		],
		[
            "id" =>  1389,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  20,
			"equating_score" =>  230
		],
		[
            "id" =>  1390,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  21,
			"equating_score" =>  240
		],
		[
            "id" =>  1391,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  22,
			"equating_score" =>  250
		],
		[
            "id" =>  1392,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  23,
			"equating_score" =>  250
		],
		[
            "id" =>  1393,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  24,
			"equating_score" =>  260
		],
		[
            "id" =>  1394,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  25,
			"equating_score" =>  260
		],
		[
            "id" =>  1395,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  26,
			"equating_score" =>  270
		],
		[
            "id" =>  1396,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  27,
			"equating_score" =>  270
		],
		[
            "id" =>  1397,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  28,
			"equating_score" =>  280
		],
		[
            "id" =>  1398,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  29,
			"equating_score" =>  290
		],
		[
            "id" =>  1399,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  30,
			"equating_score" =>  290
		],
		[
            "id" =>  1400,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  31,
			"equating_score" =>  300
		],
		[
            "id" =>  1401,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  32,
			"equating_score" =>  300
		],
		[
            "id" =>  1402,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  33,
			"equating_score" =>  310
		],
		[
            "id" =>  1403,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  34,
			"equating_score" =>  310
		],
		[
            "id" =>  1404,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  35,
			"equating_score" =>  320
		],
		[
            "id" =>  1405,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  36,
			"equating_score" =>  330
		],
		[
            "id" =>  1406,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  37,
			"equating_score" =>  330
		],
		[
            "id" =>  1407,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  38,
			"equating_score" =>  340
		],
		[
            "id" =>  1408,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  39,
			"equating_score" =>  350
		],
		[
            "id" =>  1409,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  40,
			"equating_score" =>  350
		],
		[
            "id" =>  1410,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  41,
			"equating_score" =>  360
		],
		[
            "id" =>  1411,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  42,
			"equating_score" =>  380
		],
		[
            "id" =>  1412,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  43,
			"equating_score" =>  390
		],
		[
            "id" =>  1413,
			"practice_test_id" =>  15,
			"subject_id" =>  2,
			"raw_score" =>  44,
			"equating_score" =>  400
		]
	]
            );
    }
}
