<?php

namespace App\Http\Controllers\Api;

use App\Subscription\Manager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Subscription
{
    public function __construct(private Manager $manager)
    {
    }

    public function cancel(Request $request): Response
    {
        $this->manager->userCancel();
        return new Response();
    }
}
