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
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        //$this->seedItemsFromWeb();
        $this->call(ItemsTableSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(AbilitiesTableSeeder::class);

        $this->call(ItemShopTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(AbilityItemTableSeeder::class);
        $this->call(ItemLocaleTableSeeder::class);
        $this->call(ItemRecipeTableSeeder::class);
        $this->call(ItemStatTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
    }

    protected function seedItemsFromWeb()
    {
        \DB::table('items')->delete();

        Api::init('354765AC2104244D57B1F434CBB8B4F7', []);

        $itemMapper = new \Dota2Api\Mappers\ItemsMapperWeb();
        $itemInfo = $itemMapper->load();

        foreach ( $itemInfo as $item ) {
            $newItem = new Item();
            $newItem->dota_id    = $item->get('id');
            $newItem->name       = $item->get('localized_name');
            $newItem->base_class = $item->get('name');
            $newItem->cost       = $item->get('cost');
            $newItem->is_recipe  = $item->get('recipe');
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
