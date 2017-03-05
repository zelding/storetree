<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abilities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();

            $table->string('base_class')->unique();
            $table->text('behaviour');
            $table->string('type');
            $table->string('texture_name');

            $table->boolean('deny_self_cast');
            $table->boolean('cast_hidden');

            $table->text('target_team');
            $table->text('target_type');
            $table->text('target_flags');

            $table->string('damage_type');
            $table->string('damage');
            $table->string('mana_cost');
            $table->string('gold_cost');
            $table->string('cooldown');
            $table->string('cast_range');
            $table->string('cast_point');
            $table->string('cast_range_buffer');
            $table->string('channel_time');
            $table->string('channel_mana_cost');
            $table->string('duration');

            $table->string('cooldown_group');

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
        Schema::dropIfExists('abilities');
    }
}
