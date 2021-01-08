<?php

namespace App\Subscription\RequestParser;

use App\Subscription\ActionData;
use App\Subscription\RequestParser;

class Apple implements RequestParser
{
    public function parse(array $data): ActionData
    {
        return new ActionData('', '', '');
    }
}
