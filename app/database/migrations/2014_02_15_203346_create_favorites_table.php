<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration {

    public function up() {
        Schema::create('favorites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id');
            $table->integer('user_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->unique(array('topic_id', 'user_id'));
        });
    }

    public function down() {
        Schema::dropIfExists('favorites');
    }

}
