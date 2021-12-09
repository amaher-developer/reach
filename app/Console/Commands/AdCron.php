<?php

namespace App\Console\Commands;

use App\Modules\Ad\Models\Ad;
use Carbon\Carbon;
use Illuminate\Console\Command;

class AdCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ad:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ads = Ad::where('start_date', Carbon::tomorrow())->get();
        foreach ($ads as $ad){
            mail($ad->advertiser, 'remainder email', 'remainder email body');
        }
    }
}
