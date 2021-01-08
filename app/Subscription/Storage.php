<?php

namespace App\Subscription;

interface Storage
{
    public function insert(Subscription $subscription): void;

    public function update(Subscription $subscription): void;
}
