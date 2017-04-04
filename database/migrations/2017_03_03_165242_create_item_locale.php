<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemLocale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_locale', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('language_id');
            $table->unsignedInteger('item_id')->index();
            $table->string('name');
            $table->text('description');
            $table->text('lore')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();

            $table->index(['language_id', 'item_id']);

            $table->foreign('item_id')->references('id')->on('items')
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
