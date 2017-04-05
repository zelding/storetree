<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/4/17 3:32 PM
 */

namespace Tests\Rest;

use Tests\ApiTest;

class GetAbilitiesTest extends ApiTest
{
    /**
     * @return void
     */
    public function testStatsIndex()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/abilities?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testStatsIndexPagedWithStep()
    {
        $this->setPagerParams(1, 2);

        $response = $this->get(
            $this->baseExternalUrl . "/abilities?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testStatsIndexNoResult()
    {
        $this->setPagerParams(150, 55);

        $response = $this->get(
            $this->baseExternalUrl . "/abilities?".
            http_build_query($this->queryParams)
        );

        $response->assertStatus(204);
    }
}