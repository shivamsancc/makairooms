<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_queries', function (Blueprint $table) {
            $table->id();
            $table->string('date_of_visit');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('cookie_id');
            $table->string('form_message')->nullable();
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
        Schema::dropIfExists('listing_queries');
    }
}
