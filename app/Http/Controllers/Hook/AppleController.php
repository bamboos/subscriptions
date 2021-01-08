<?php

namespace App\Http\Controllers\Hook;

use App\Http\Controllers\Controller;
use App\Subscription\RequestParser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppleController extends Controller
{
    public function __construct(private RequestParser $parser) {}

    public function accept(Request $request): Response
    {
        // validate request
        $data = $this->parser->parse([]);

        $this->dispatchAction($data);

        return new Response();
    }
}
