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

            $table->string('base_class')->default('item_datadriven')->nullable();
            $table->text('behaviour');
            $table->enum('type', \App\Utils\Constants::$abilityType)->default('DOTA_ABILITY_TYPE_BASIC');
            $table->string('texture_name')->nullable();
            $table->boolean('is_override')->default(false);

            $table->boolean('deny_self_cast')->default(true);
            $table->boolean('cast_hidden')->default(false);
            $table->boolean('magic_stick')->default(false);

            $table->text('target_team')->nullable();
            $table->text('target_type')->nullable();
            $table->text('target_flags')->nullable();

            $table->string('damage_type')->nullable();
            $table->string('damage')->nullable();
            $table->string('mana_cost')->nullable();
            $table->string('gold_cost')->nullable();
            $table->string('cooldown');
            $table->string('cast_range')->nullable();
            $table->string('cast_point')->nullable();
            $table->string('cast_range_buffer')->nullable();
            $table->string('channel_time')->nullable();
            $table->string('channel_mana_cost')->nullable();
            $table->string('duration');

            $table->string('cooldown_group')->nullable();
            $table->string("script")->nullable();

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
