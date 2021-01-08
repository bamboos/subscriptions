<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessCancelAction;
use App\Jobs\ProcessInitAction;
use App\Jobs\ProcessRenewAction;
use App\Subscription\ActionData;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function dispatchAction(ActionData $data): void
    {
        match ($data->action) {
            'init' => ProcessInitAction::dispatch($data),
            'renew' => ProcessRenewAction::dispatch($data),
            'cancel' => ProcessCancelAction::dispatch($data)
        };
    }
}
