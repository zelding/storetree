<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/4/17 3:24 PM
 */

namespace Tests\Rest;

use Tests\ApiTest;

class GetStatsTest extends ApiTest
{
    /**
     * @return void
     */
    public function testStatsIndex()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/stats?".
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
    public function testStatsIndexPaged()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/stats?".
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
    public function testStatsIndexPagedWithStep()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/stats?".
            http_build_query(
                [
                    'api_token' => $this->testApiKey,
                    'page'      => 1,
                    'step'      => 20
                ]
            )
        );

        $response->assertStatus(200);
    }

    /**
     * @return void
     */
    public function testStatsIndexNoResult()
    {
        $response = $this->get(
            $this->baseExternalUrl . "/stats?".
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