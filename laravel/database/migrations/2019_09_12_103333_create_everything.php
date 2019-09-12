<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEverything extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('handle');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('img');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('live_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->dateTime('happens_at');
            $table->timestamps();
        });

        Schema::create('course_user', function(Blueprint $table) {
            $table->bigInteger('course_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('course_id', 'fky_course_user_course')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
            $table->foreign('user_id', 'fky_course_user_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::create('live_event_user', function(Blueprint $table) {
            $table->bigInteger('live_event_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('live_event_id', 'fky_live_event_user_live_event')
                ->references('id')
                ->on('live_events')
                ->onDelete('cascade');
            $table->foreign('user_id', 'fky_live_event_user_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });

        Schema::table('users', function(Blueprint $table) {
            $table->string('locale')->default('en_GB');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumn('users', 'locale')) {
            Schema::table('users', function(Blueprint $table) {
                $table->dropColumn('locale');
            });
        }

        Schema::dropIfExists('live_event_user');
        Schema::dropIfExists('course_user');
        Schema::dropIfExists('live_events');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('brands');
    }
}
