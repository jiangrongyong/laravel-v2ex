<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteUsersTable extends Migration {

    public function up() {
        Schema::create('favorite_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('follow_user_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

            $table->unique(array('follow_user_id', 'user_id'));
        });
    }

    public function down() {
        Schema::dropIfExists('favorite_users');
    }

}
