<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('author');
            $table->string('st_date');
            $table->string('end_date');
            $table->text('content')->nullable();;
            $table->string('description')->nullable();;
            $table->string('image')->nullable();;
            $table->string('banner_image')->nullable();;
            $table->integer('category')->nullable();;
            $table->integer('sort')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('homepage')->default(0);
            $table->string('meta_keywords')->nullable();;
            $table->string('meta_description')->nullable();;
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
        Schema::dropIfExists('events');
    }
}
