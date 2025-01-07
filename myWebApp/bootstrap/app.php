<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'https://special-funicular-pj7qr4qv9r9x3vpq-8001.app.github.dev/*',
            'https://special-funicular-pj7qr4qv9r9x3vpq-8001.app.github.dev',
        ]);
        })  
        ->withMiddleware(function (Middleware $middleware) {
            $middleware->validateCsrfTokens(except: [
                'stripe/*',
                'http://example.com/foo/bar',
                'http://example.com/foo/*',
            ]);
        })
    /*
    ->withExceptions(function (Exceptions $exceptions) {
        //https://special-funicular-pj7qr4qv9r9x3vpq-8001.app.github.dev/postData
    
    })->create();
*/;