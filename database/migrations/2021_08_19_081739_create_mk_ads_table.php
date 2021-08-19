<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMkAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mk_ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ad_design');
            $table->string('start_date')->nullable();
            $table->string('place')->nullable();
            $table->string('end_date')->nullable();
            $table->integer('state')->nullable();
            $table->integer('district')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('mk_ads');
    }
}
