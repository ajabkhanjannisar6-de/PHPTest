<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SaveDate extends Command
{
    protected $signature = 'date:save';

    protected $description = 'Save current date to text file';

    public function handle()
    {
        // دوه عددونه اخلي، خو نتیجه یې نه ذخیره کوي
        $number1 = $this->ask('Enter first number');
        $number2 = $this->ask('Enter second number');

        $result = $number1 + $number2;

        // یوازې اوسنی تاریخ
        $date = now()->format('Y-m-d');

        // موجود text.txt ته یوازې تاریخ اضافه کوي
        file_put_contents(
            storage_path('app/text.txt'),
            "\nDate: {$date}\n",
            FILE_APPEND
        );

        $this->info("The two numbers are: {$result}");
        $this->info("Date saved successfully.");

        return Command::SUCCESS;
    }
}