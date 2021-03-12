<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Dotenv\Dotenv;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        /* begin eigen toevoeging */
        if (file_exists(dirname(__DIR__) . '/.env.test_local_development_environment')) {
            $dotEnv = Dotenv::createImmutable(__DIR__ . '/../', '.env.test_local_development_environment');
            $dotEnv->load();
        }
        /* einde eigen toevoeging */
         
        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
