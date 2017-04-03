<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class ApiTest extends BaseTestCase
{
    use CreatesApplication;

    protected $testApiKey = "554d90c7b5267176c77aadb0a407a40d0249525f9dd490de1ac4ba06df839ee72a3503dd2e602a8e171b286a67defa9876a60f38911aca43b74e811edc22d030";

    protected $baseExternalUrl = "/api/external/v1";
}