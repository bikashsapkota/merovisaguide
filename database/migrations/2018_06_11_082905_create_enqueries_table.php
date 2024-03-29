<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnqueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enqueries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('address');
            $table->integer('country');
            $table->string('purpose');
            $table->text('message');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('enqueries');
    }
}
