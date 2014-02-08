<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration {

    public function up() {
        Schema::create('nodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('header');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down() {
        Schema::dropIfExists('nodes');
    }

}