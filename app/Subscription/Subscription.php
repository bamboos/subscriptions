<?php

namespace App\Subscription;

class Subscription
{
    public function __construct(
        Transaction $transaction,
        bool $status
    ) {}
}
