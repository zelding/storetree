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
}
