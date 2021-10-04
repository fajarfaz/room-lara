<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('excerpt');
            $table->text('body');
            $table->string('status');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('post_rooms');
    }
}
