<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    public function up()
    {
        Schema::create('test', function(Blueprint $table) {
            $table->increments('id');
        });
    }

    public function down()
    {
        Schema::drop('test');
    }
}