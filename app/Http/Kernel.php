<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [   

        'AuthCheck'=> \App\Http\Middleware\AuthCheck::class,
        'home'=> \App\Http\Middleware\InicioMiddleware::class,
        'egresado'=> \App\Http\Middleware\EgresadoMiddleware::class,
        'academia'=> \App\Http\Middleware\AcademiaMiddleware::class,
        'escolares'=> \App\Http\Middleware\EscolaresMiddleware::class,
        'division'=> \App\Http\Middleware\DivisionMiddleware::class,
        'jefatura'=> \App\Http\Middleware\JefaturaMiddleware::class,
      
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

        // 'egresado' => \App\Http\Middleware\Egresado::class,//
        // 'administrador' => \App\Http\Middleware\Administrador::class,//
        // 'division' => \App\Http\Middleware\Division::class,//
        // 'jefatura' => \App\Http\Middleware\Jefatura::class,//
        // 'academia' => \App\Http\Middleware\Academia::class,//
        // 'escolares' => \App\Http\Middleware\Escolares::class,//
        // 'asesor' => \App\Http\Middleware\Asesor::class,
    ];
}
