<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PrintText extends Command
{
    protected $signature = 'text:print';

    protected $description = 'Save text to text file';

    public function handle()
    {
        $text = "Hello Pathan ,Welcom to Durrani Aria Digitals services";

        file_put_contents(
            storage_path('app/text.txt'),
            $text . PHP_EOL,
            FILE_APPEND
        );

        $this->info('text save successfully');

        return Command::SUCCESS;
    }
}