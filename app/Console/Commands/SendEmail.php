<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to send email from Job';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SendEmailJob::dispatch();
        return Command::SUCCESS;
    }
}
