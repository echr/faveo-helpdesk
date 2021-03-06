<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

/**
 * Kernel.
 */
class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        //'App\Http\Middleware\VerifyCsrfToken',
        'App\Http\Middleware\LanguageMiddleware',
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth'        => 'App\Http\Middleware\Authenticate',
        'auth.basic'  => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest'       => 'App\Http\Middleware\RedirectIfAuthenticated',
        'roles'       => 'App\Http\Middleware\CheckRole',
        'role.agent'  => 'App\Http\Middleware\CheckRoleAgent',
        'role.user'   => 'App\Http\Middleware\CheckRoleUser',
        'api'         => 'App\Http\Middleware\ApiKey',
        'jwt.auth'    => \Tymon\JWTAuth\Middleware\GetUserFromToken::class,
        'jwt.refresh' => \Tymon\JWTAuth\Middleware\RefreshToken::class,
    ];
}
