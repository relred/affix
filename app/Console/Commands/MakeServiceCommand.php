<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $stub = File::get(base_path('stubs/service.stub'));
        $stub = str_replace('{{class}}', $name, $stub);

        $path = app_path("Services/{$name}.php");

        if (File::exists($path)) {
            $this->error('Service already exists!');

            return;
        }

        File::put($path, $stub);
        $this->info('Service created successfully.');
    }
}
