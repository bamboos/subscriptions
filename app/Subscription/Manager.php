<?php

namespace App\Subscription;

class Manager
{
    public function __construct(private Storage $storage)
    {
    }

    public function init(ActionData $data)
    {
        $this->storage->insert(
            new Subscription(new Transaction(0), true)
        );
    }

    public function renew(ActionData $data)
    {

    }

    public function cancel(ActionData $data)
    {

    }

    public function userCancel()
    {

    }
}
