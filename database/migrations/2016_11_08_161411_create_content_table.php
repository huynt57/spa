<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu')->nullable();
            $table->integer('type')->nullable();
            $table->text('content')->nullable();
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('main')->nullable();
            $table->text('description')->nullable();
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
        //
    }
}
