<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

use App\Http\Middleware\Agecheak;
use App\Http\Middleware\Acess;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //


        //this for all route middleware 
       // $middleware->append(Agecheak::class);

        //this is group middleware for spefic route 
        // $middleware->appendToGroup('group_middleware',
        // [

        // Agecheak::class,
        // Acess::class,

        // ]);

        //this how group can be multyple time
        // $middleware->appendToGroup('group_middleware',
        // [

        // Agecheak::class,
        // Acess::class,

        // ]);



    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*') || $request->expectsJson(),
        );
    })->create();
