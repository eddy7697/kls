<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/cvs_map_callback',
        '/ecpay-return',
        '/logistics-return',
        '/payment_info',
        '/mailtest',
        '/hppe-callback'
    ];
}
