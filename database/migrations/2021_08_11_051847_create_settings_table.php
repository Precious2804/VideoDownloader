<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('isAdmin')->default(1)->nullable();
            $table->string('whatsapp_promotion')->nullable();
            $table->string('telegram_promotion')->nullable();
            $table->string('facebook')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('email')->nullable();
            $table->string('telegram')->nullable();
            $table->longText('uploader_note')->nullable();
            $table->longText('footer_note')->nullable();
            $table->longText('logo')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
