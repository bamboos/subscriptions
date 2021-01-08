<?php

namespace App\Subscription;

class ActionData
{
    public function __construct(
        public string $action,
        public string $provider,
        public string $identifier,
        public bool $status = false,
        public float $transactionAmount = 0
    ) {}
}
