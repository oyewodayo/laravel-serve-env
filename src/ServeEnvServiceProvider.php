<?php

namespace oyewodayo\ServeEnv;

use Illuminate\Support\ServiceProvider;

class ServeEnvServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            Commands\ServeCommand::class,
        ]);
    }
}