<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {
    $app->get('/', function (
        ServerRequestInterface $request,
        ResponseInterface $response
    ) {
        $response->getBody()->write('Hello, World!');

        return $response;
    });
};

// GET app.domain/blog/ - list all the blog posts
// GET app.domain/blog/:id - list the blog post with the id
// POST app.domain/blog/ - create the blog post
// POST app.domain/blog/:id - update the blog post with the id
// DELETE app.domain/blog/:id - delete the blog with the id
