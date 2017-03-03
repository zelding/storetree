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
            $table->unsignedInteger('item_id');
            $table->string('name');
            $table->text('description');
            $table->text('lore')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();

            $table->index(['language_id', 'item_id']);
        });
    }

    private function oldData ()
    {
        $items = \App\Item::where('is_recipe', 0)->get();
        $now = (new \DateTime())->format('Y-m-d- H:i:s');

        foreach( $items as $item ) {
            /** @var \App\Item $item */
            DB::table('item_locale')
                ->insert([
                    "language_id" => 1,
                    "item_id"     => $item->id,
                    "name"        => $item->name,
                    "description" => $item->description ?? "",
                    "created_at"  => $now,
                    "updated_at"  => $now
            ]);
        }
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
