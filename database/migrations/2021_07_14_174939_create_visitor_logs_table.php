<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_logs', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->text('userAgent')->nullable();
            $table->string('method')->nullable();
            $table->string('path')->nullable();
            $table->text('cookie_id')->nullable();
            $table->longtext('parameters')->nullable();
            $table->string('response_code')->nullable();
            $table->string('response_after')->nullable();
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
        Schema::dropIfExists('visitor_logs');
    }
}
