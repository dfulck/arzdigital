<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubetsosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subetsos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etso_id')->nullable()->constrained();
            $table->string('NameTashakol');
            $table->string('number');
            $table->string('fox');
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
        Schema::dropIfExists('subetsos');
    }
}
