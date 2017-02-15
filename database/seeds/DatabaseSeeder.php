<?php

use Illuminate\Database\Seeder;
use Dota2Api\Api;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedShops();
    }

    protected function seedShops()
    {
        DB::table('shops')->insert([
            "name" => "Basic shop"
        ]);

        DB::table('shops')->insert([
            "name" => "Side shop"
        ]);

        DB::table('shops')->insert([
            "name" => "Secret shop"
        ]);

        DB::table('shops')->insert([
            "name" => "Azazel"
        ]);
    }

    protected function seedItemsFromWeb()
    {
        Api::init('354765AC2104244D57B1F434CBB8B4F7', []);

        $itemMapper = new \Dota2Api\Mappers\ItemsMapperWeb();
        $itemInfo = $itemMapper->load();

        foreach ( $itemInfo as $item ) {
            $newItem = new Item();
            $newItem->name      = $item->get('localized_name');
            $newItem->cost      = $item->get('cost');
            $newItem->is_recipe = $item->get('recipe');
            $newItem->save();

            if ( $item->get('side_shop') ) {
                $newItem->shops()->attach(2);
            }

            if ( $item->get('secret_shop') ) {
                $newItem->shops()->attach(3);
            }
            else {
                $newItem->shops()->attach(1);
            }
        }
    }
}
