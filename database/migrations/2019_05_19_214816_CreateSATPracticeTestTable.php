<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSATPracticeTestTable extends Migration
{
    const TABLE = 'sat_practice_test';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('description');
            $table->string('testForm');
            $table->integer('sequence');
            $table->integer('test_source_id');
            $table->integer('page');
            $table->boolean('active');
            $table->timestamps();
            $table->boolean('invalid');
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
