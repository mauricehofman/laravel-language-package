<?php

namespace Mauricehofman\LaravelLanguagePackage\Tests;

use Orchestra\Testbench\TestCase;
use Mauricehofman\LaravelLanguagePackage\LaravelLanguagePackageServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelLanguagePackageServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
