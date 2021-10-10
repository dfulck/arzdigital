<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalas', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('image');
            $table->text('body');
            $table->string('number');
            $table->string('Unit');
            $table->string('Top_importing_countries');
            $table->string('Top_exporting_countries');
            $table->string('Total_volume_of_world_trade');
            $table->string('Value_of_Iranian_imports');
            $table->string('Global_export_value');
            $table->string('Value_of_Iranian_exports');
            $table->string('Production_rate');
            $table->string('Global_import_value');
            $table->string('Iran_rank_in_production');
            $table->string('Number_of_commodity_group_tariff_codes');
            $table->string('status');
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
        Schema::dropIfExists('kalas');
    }
}
