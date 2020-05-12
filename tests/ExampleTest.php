<?php

namespace Thecodebunny\StreamingEngine\Tests;

use Orchestra\Testbench\TestCase;
use Thecodebunny\StreamingEngine\StreamingEngineServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [StreamingEngineServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
