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
}
