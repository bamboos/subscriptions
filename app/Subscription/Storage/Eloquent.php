<?php

namespace App\Subscription\Storage;

use App\Subscription\Storage;
use App\Subscription\Subscription;

class Eloquent implements Storage
{
    public function insert(Subscription $subscription): void
    {
        //$subscriptionModel = new \App\Models\Subscription();
        //$subscriptionModel->save();
    }

    public function update(Subscription $subscription): void
    {
        // TODO: Implement update() method.
    }
}
