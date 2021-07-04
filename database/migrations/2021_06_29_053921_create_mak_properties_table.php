<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mak_properties', function (Blueprint $table) {
            $table->id();
            $table->string('partner_id');
            $table->string('name');
            $table->string('property_type');
            $table->string('youtube_link')->nullable();
            $table->string('360_degree_link')->nullable();
            $table->text('about_property')->nullable();
            $table->text('address')->nullable();
            $table->string('state');
            $table->string('district');
            $table->string('pincode');
            $table->string('price_range1');
            $table->string('price_range2');
            $table->string('slug');
            $table->string('lat');
            $table->string('long');
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
        Schema::dropIfExists('mak_properties');
    }
}
