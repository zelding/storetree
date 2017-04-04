<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilityItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_item', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('item_id')->index();
            $table->unsignedInteger('ability_id')->index();

            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items')
                  ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('ability_id')->references('id')->on('abilities')
                  ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
