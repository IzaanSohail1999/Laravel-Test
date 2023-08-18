<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use JetBrains\PhpStorm\NoReturn;

class watch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'watch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Created For Testing Purposes';

    /**
     * Execute the console command.
     */
    #[NoReturn] public function handle(): void
    {
        dd("this is a test command further");
    }
}
