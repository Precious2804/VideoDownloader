<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos_tables', function (Blueprint $table) {
            $table->id();
            $table->uuid('unique_id');
            $table->string('title');
            $table->string('type');
            $table->string('size')->nullable();
            $table->string('video_type');
            $table->string('url');
            $table->string('subtitle')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->longText('embed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos_tables');
    }
}
