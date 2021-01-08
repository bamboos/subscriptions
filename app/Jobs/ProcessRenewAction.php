<?php

namespace App\Jobs;

use App\Subscription\ActionData;
use App\Subscription\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessRenewAction implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private ActionData $data) {}

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Manager $manager)
    {
        $manager->renew($this->data);
    }
}
