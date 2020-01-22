<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SATSubScoreSectionsTable extends Migration
{
    const TABLE = 'sat_sub_score_sections';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
           $table->increments('id');
           $table->string('label');
           $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
           $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
           $table->boolean('valid');
           $table->boolean('deleted');
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
