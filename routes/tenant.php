<?php

declare(strict_types=1);

use App\Http\Controllers\Tenants\UserController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use Stancl\Tenancy\Middleware\ScopeSessions;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
    ScopeSessions::class
])->group(function () {
    Route::get('/', function () {
        return '<h1>This is your multi-tenant application. The id of the current tenant is ' . tenant('id') . '</h1>';
    });

    Route::get('users', [UserController::class, 'index']);
    Route::get('users/{user}', [UserController::class, 'view']);
});
