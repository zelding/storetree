<?php

namespace Tests\Rest;

use Tests\ApiTest;
use App\Utils\Constants;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class getItems extends ApiTest
{
    //reroll after each test
    use DatabaseTransactions;

    #region Get requests
    /**
     * @return void
     */
    public function testItemsIndex()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testItemsIndexPaged()
    {
        $this->setPagerParams(2);

        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testItemsIndexPagedWithStep()
    {
        $this->setPagerParams(1, 67);

        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);


    }

    /**
     * @return void
     */
    public function testItemsIndexNoResult()
    {
        $this->setPagerParams(150, 55);

        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(204);
    }

    /**
     * Butterfly 2
     *
     * @return void
     */
    public function testItemShow()
    {
        $this->setPagerParams(1, 67);

        $response = $this->get(
            $this->baseExternalUrl . "/items/3136?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }

    /**
     * Butterfly 2
     *
     * @return void
     */
    public function testSimpleItemShow()
    {
        $this->setPagerParams(1, 67)
            ->addQueryParam('simple', true);

        $response = $this->get(
            $this->baseExternalUrl . "/items/3136?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }
    #endregion

    #region Post requests
    /**
     * @return void
     */
    public function testItemCreateMinimal()
    {
        $postData = [
            'dota_id'        => 10001,
            'base_class'     => "item_test_01",
            //'max_level'      => 1,
            //'base_level'     => 1,
            //'is_consumable'  => 0,
            //'is_base_item'   => 0,
            //'is_boss_item'   => 0,
            //'is_recipe'      => 0,
            //'is_killable'    => 1,
            //'is_sellable'    => 1,
            //'is_purchasable' => 1,
            //'is_droppable'   => 1,
            //'in_backpack'    => 1,
            'name'           => "Test item 01",
            'description'    => "just some test stuff",
            'cost'           => 1967,
            //'stack_size'     => 1,
            'model'          => "models/test/test.mld",
            'fight_recap'    => 0,
            'quality'        => "component",
            'share'          => Constants::$shareable[0],
            //'stock_max'      => 0,
            //'stock_time'     => 0,
            //'stock_initial'  => 0,
            //'start_charges'  => 0,
            //'show_charges'   => 0,
            //'needs_charges'  => 0,
            //'is_autocast'    => "",
            //'is_alertable'   => "",
            //'alert_text'     => "",
            //'is_permanent'   => "",
            //'disassemble'    => "",
            //'script'         => "",
            //'shop_tags'      => [],
            //'aliases'        => [],
            //'is_override'    => "",
            //'declarations'   => ""
        ];

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
            http_build_query($this->queryParams),
            $postData
        );

        $response->assertStatus(201);
    }

    /**
     * @return void
     */
    public function testItemCreateFull()
    {
        $postData = [
            'dota_id'        => 10001,
            'base_class'     => "item_test_01",
            'max_level'      => 1,
            'base_level'     => 1,
            'is_consumable'  => 0,
            'is_base_item'   => 0,
            'is_boss_item'   => 0,
            'is_recipe'      => 0,
            'is_killable'    => 1,
            'is_sellable'    => 1,
            'is_purchasable' => 1,
            'is_droppable'   => 1,
            'in_backpack'    => 1,
            'name'           => "Test item 01",
            'description'    => "just some test stuff",
            'cost'           => 1967,
            'stack_size'     => 1,
            'model'          => "models/test/test.mld",
            'fight_recap'    => 0,
            'quality'        => "component",
            'share'          => Constants::$shareable[0],
            'stock_max'      => 0,
            'stock_time'     => 0,
            'stock_initial'  => 0,
            'start_charges'  => 0,
            'show_charges'   => 0,
            'needs_charges'  => 0,
            'is_autocast'    => "",
            'is_alertable'   => 1,
            'alert_text'     => "Hey you!",
            'is_permanent'   => 1,
            'disassemble'    => Constants::$disassemble[1],
            'script'         => "",
            'shop_tags'      => ['test1', 'test4'],
            'aliases'        => ['stupidness', 'somethingsilly'],
            'is_override'    => "",
            'declarations'   => Constants::$declaration
        ];

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
            http_build_query($this->queryParams),
            $postData
        );

        $response->assertStatus(201);
    }

    /**
     * @return void
     */
    public function testItemCreate406()
    {
        $postData = [
            'dota_id'        => 10001,
            'base_class'     => "item_test_01",
            'name'           => "Test item 01",
            'description'    => "just some test stuff",
            'cost'           => 1967,
            'model'          => "models/test/test.mld",
            'fight_recap'    => 0,
            'quality'        => "component",
        ];

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
            http_build_query($this->queryParams),
            $postData
        );

        $response->assertStatus(406);
    }

    /**
     * @return void
     */
    public function testItemCreate409()
    {
        $postData = [
            'dota_id'        => 4020,
            'base_class'     => "item_test_01",
            'name'           => "Test item 01",
            'description'    => "just some test stuff",
            'cost'           => 1967,
            'model'          => "models/test/test.mld",
            'fight_recap'    => 0,
            'quality'        => "component",
            'share'          => Constants::$shareable[0],
        ];

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
                http_build_query($this->queryParams),
           $postData
        );

        $response->assertStatus(409);
    }

    /**
     * @return void
     */
    public function testItemCreate401()
    {
        $postData = [
            'dota_id'    => 12345,
            'base_class' => "salkdjhaslkjdhsakld",
            'name'       => 'asdkahsdkljhsad'
        ];

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
                http_build_query(['api_token' => '']),
            $postData
        );

        $response->assertStatus(401);
    }

    /**
     * @return void
     */
    public function testItemCreate403()
    {
        $postData = [
            'dota_id'    => 12345,
            'base_class' => "salkdjhaslkjdhsakld",
            'name'       => 'asdkahsdkljhsad'
        ];

        $this->addQueryParam('api_token', $this->badApiKey);

        $response = $this->postJson(
            $this->baseExternalUrl . '/items?'.
                http_build_query($this->queryParams),
            $postData
        );

        $response->assertStatus(403);
    }
    #endregion
}
