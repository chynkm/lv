<?php

namespace App\Action\Blog;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class CreateAction
{
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response
    ): ResponseInterface{
        $response->getBody()->write('Hello, World!');

        return $response;
    }
}
