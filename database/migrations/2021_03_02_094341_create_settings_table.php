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
            $table->string('logo')->nullable();
            $table->string('menu_1');
            $table->string('menu_2');
            $table->string('menu_3');
            $table->string('location_title');
            $table->string('location_content');
            $table->string('social_icons_title');
            $table->string('fb_url');
            $table->string('tw_url');
            $table->string('in_url');
            $table->string('db_url');
            $table->string('footer_about_title');
            $table->string('footer_about_content');
            $table->string('footer_content');
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
