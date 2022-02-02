<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('email');
            $table->char('phone');
            $table->string('status');
            $table->string('ip_address');
            $table->string('device');
            $table->string('lat_rumah')->nullable();
            $table->string('lng_rumah')->nullable();
            $table->string('screen')->nullable();
            $table->string('platform');
            $table->string('version_platform');
            $table->string('browser');
            $table->string('version_browser');
            $table->string('languages')->nullable();
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
        Schema::dropIfExists('client');
    }
}
