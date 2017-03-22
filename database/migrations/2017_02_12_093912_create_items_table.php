<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Utils\Constants;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('dota_id')->unique()->nullable()->default(null);
            $table->string('base_class')->unique()->nullable()->default(null);
            $table->string('script')->nullable()->default(null);
            $table->tinyInteger('max_level')->default(1);
            $table->tinyInteger('base_level')->default(1);
            $table->boolean('is_consumable')->default(false);
            $table->boolean('is_base_item')->default(false);
            $table->boolean('is_boss_item')->default(false);
            $table->boolean('is_recipe')->default(false);
            $table->boolean('is_killable')->default(true);
            $table->boolean('is_sellable')->default(true);
            $table->boolean('is_purchasable')->default(true);
            $table->boolean('is_droppable')->default(true);
            $table->boolean('in_backpack')->default(true);
            $table->boolean('is_override')->default(false);
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('cost')->default(0);
            $table->unsignedTinyInteger('stack_size')->default(1);
            $table->string('model')->nullable()->default('models/props_gameplay/recipe.vmdl');
            $table->tinyInteger('fight_recap')->default(0);
            $table->enum('quality', Constants::$itemQuality)->default('component');
            $table->enum('share', Constants::$shareable)->default('ITEM_NOT_SHAREABLE');
            $table->enum('disassembe', Constants::$disassemble)->default('DOTA_ITEM_DISASSEMBLE_NEVER');
            $table->text('declarations')->nullable()->default(null);
            $table->tinyInteger('stock_max')->default(0);
            $table->mediumInteger('stock_time')->default(0);
            $table->tinyInteger('stock_initial')->default(0);
            $table->tinyInteger('start_charges')->default(0);
            $table->boolean('show_charges')->default(false);;
            $table->boolean('needs_charges')->default(false);
            $table->boolean('is_permanent')->default(true);
            $table->boolean('is_autocast')->default(false);
            $table->boolean('is_alertable')->default(false);
            $table->string('alert_text')->nullable();
            $table->text('shop_tags')->nullable()->default(null);
            $table->text('aliases')->nullable()->default(null);
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
        Schema::dropIfExists('items');
    }
}
