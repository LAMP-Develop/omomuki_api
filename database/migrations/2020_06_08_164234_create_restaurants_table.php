<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('cuisine_genre_id');
            $table->foreign('cuisine_genre_id')->references('id')->on('cuisine_genre');
            $table->string('tel')->unique();
            $table->string('zipcode');
            $table->unsignedBigInteger('pref_id');
            $table->foreign('pref_id')->references('id')->on('pref');
            $table->string('address1');
            $table->string('address2');
            $table->string('gmap_url')->nullable();
            $table->string('access')->nullable();
            $table->string('business_hours');
            $table->string('regular_holiday');
            $table->boolean('parking_flag');
            $table->string('parking_text')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('electronic_money')->nullable();
            $table->string('hp_url')->nullable();
            $table->string('gnavi_url')->nullable();
            $table->string('tabelog_url')->nullable();
            $table->string('demaecan_url')->nullable();
            $table->string('ubereats_url')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
