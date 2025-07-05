<?php

namespace oyewodayo\ServeEnv\Commands;

use Illuminate\Console\Command;

class ServeCommand extends Command
{
    protected $signature = 'serve:env
                            {--host= : The host address to serve the application on}
                            {--port= : The port to serve the application on}';

    protected $description = 'Start the Laravel development server with .env configurable port';

    public function handle()
    {
        $host = $this->option('host') ?: env('APP_HOST', '127.0.0.1');
        $port = $this->option('port') ?: env('APP_PORT', 8000);

        $this->info("Laravel development server started on http://{$host}:{$port}");

        passthru("php artisan serve --host={$host} --port={$port}");
    }
}