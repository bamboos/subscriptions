<?php

namespace App\Subscription;

interface RequestParser
{
    public function parse(array $data): ActionData;
}
