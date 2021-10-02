<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('Role_id')->constrained();
            $table->string('username')->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->string('job')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->integer('age')->nullable();
            $table->string('image')->nullable();
            $table->string('number');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('CollectionLink')->nullable();
            $table->foreignId('User_id')->nullable()->constrained();
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
        Schema::dropIfExists('users');
    }
}
