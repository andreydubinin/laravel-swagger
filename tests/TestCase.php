<?php

namespace Andreydubinin\LaravelSwagger\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return ['Andreydubinin\LaravelSwagger\SwaggerServiceProvider'];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['router']->get('/users', 'Andreydubinin\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@index');
        $app['router']->get('/users/{id}', 'Andreydubinin\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@show');
        $app['router']->post('/users', 'Andreydubinin\\LaravelSwagger\\Tests\\Stubs\\Controllers\\UserController@store');
        $app['router']->get('/api', 'Andreydubinin\\LaravelSwagger\\Tests\\Stubs\\Controllers\\ApiController@index');
        $app['router']->put('/api/store', 'Andreydubinin\\LaravelSwagger\\Tests\\Stubs\\Controllers\\ApiController@store');
    }
}
