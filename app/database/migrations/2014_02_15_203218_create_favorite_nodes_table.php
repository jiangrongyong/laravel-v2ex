<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteNodesTable extends Migration {

    public function up() {
        Schema::create('favorite_nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('node_id');
            $table->integer('user_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down() {
        Schema::dropIfExists('favorite_nodes');
    }

}
