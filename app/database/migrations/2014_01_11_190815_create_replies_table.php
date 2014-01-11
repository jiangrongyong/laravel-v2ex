<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration {

    public function up() {
        Schema::create('replies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('topic_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down() {
        Schema::dropIfExists('replies');
    }

}