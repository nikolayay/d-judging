<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('category_id')->nullable();
            $table->enum('status', array('to_be_judged', 'in_progress', 'judged'));
            $table->text('website')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('designer_and_others')->nullable();
            $table->text('cost')->nullable();
            $table->text('credits')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->dateTime('completed_date')->nullable();
            $table->text('floor_area')->nullable();
            $table->text('question')->nullable();
            $table->text('map_url')->nullable();
            $table->text('video_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
