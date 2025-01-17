<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Assign Namespace
    |--------------------------------------------------------------------------
    |
    |
    */

    'namespace' => 'Domain',

    /*
    |--------------------------------------------------------------------------
    | Default scaffold folders of a domain
    |--------------------------------------------------------------------------
    |
    |
    */

    'folders' => [
        'action' => '/Actions',
        'event' => '/Events',
        'listener' => '/Listeners',
        'exception' => '/Exceptions',
        'controller' => '/Http/Controllers',
        'middleware' => '/Http/Middleware',
        'request' => '/Http/Requests',
        'resource' => '/Http/Resources',
        'model' => '/Models',
        'policy' => '/Policies',
        'observer' => '/Observers',
        'data' => '/Data',
        'job' => '/Jobs',
        'service' => '/Services',
    ],

    'namespaces' => [
        'action' => 'Actions',
        'collection' => 'Collections',
        'config' => 'config',
        'contract' => 'Contracts',
        'dto' => 'Dtos',
        'enum' => 'Enums',
        'interface' => 'Interfaces',
        'repository' => 'Repositories',
        'service' => 'Services',
        'trait' => 'Traits',
    ],

];
