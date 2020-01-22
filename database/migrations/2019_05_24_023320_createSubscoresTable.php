<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscoresTable extends Migration
{
    const TABLE = 'sat_sub_scores_scoring_table';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function(Blueprint $table) {
           $table->increments('id');
           $table->integer('practice_test_id');
           $table->integer('sub_score_section_id');
           $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
           $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
           $table->integer('raw_score');
           $table->integer('section_score');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(self::TABLE);
    }
}
