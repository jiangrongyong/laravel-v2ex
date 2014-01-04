<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    public function up() {
        Schema::create('user', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->string('username')->unique();

            $table->string('password');

            $table->string('email')->unique();

            $table->dateTime('created_at');

            $table->dateTime('updated_at');
        });
    }

    public function down() {
        Schema::dropIfExists('user');
    }
}