<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mak_partners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mail')->unique();
            $table->string('phone')->unique();
            $table->text('address');
            $table->string('state');
            $table->string('district');
            $table->string('pincode');
            $table->string('status');
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
        Schema::dropIfExists('mak_partners');
    }
}