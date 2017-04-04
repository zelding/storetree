<?php

namespace Tests\Rest;

use Tests\ApiTest;

class getItems extends ApiTest
{
    /**
     * @return void
     */
    public function testItemsIndex()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey
                ]
            )
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testItemsIndexPaged()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'page'      => 2
                ]
            )
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testItemsIndexPagedWithStep()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'page'      => 1,
                    'step'      => 67
                ]
            )
        );

        $response->assertStatus(200);


    }

    /**
     * @return void
     */
    public function testItemsIndexNoResult()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/items?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'page'      => 150,
                    'step'      => 55
                ]
            )
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
        $response = $this->get(
            $this->baseExternalUrl . "/items/3136?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'page'      => 1,
                    'step'      => 67
                ]
            )
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
        $response = $this->get(
            $this->baseExternalUrl . "/items/3136?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'simple'    => true,
                    'page'      => 1,
                    'step'      => 67
                ]
            )
        );

        $response->assertStatus(200);
    }
}
