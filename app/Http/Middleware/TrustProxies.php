<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * Confiar en todos los proxies (Render, Railway, etc.)
     */
    protected $proxies = '*';

    /**
     * Usar todos los encabezados X-Forwarded
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}
