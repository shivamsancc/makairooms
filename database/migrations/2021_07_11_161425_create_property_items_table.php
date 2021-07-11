<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_items', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id');
            $table->string('ptoperty_id');
            $table->string('property_type');
            $table->string('item_name');
            $table->text('item_for')->nullable();
            $table->string('item_price')->nullable();
            $table->string('slug');
            $table->string('item_features');
            $table->string('status')->default('1');
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
        Schema::dropIfExists('property_items');
    }
}
