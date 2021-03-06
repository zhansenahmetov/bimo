<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
       'admin/manufactor/update',
       'admin/manufactor/delete',
       'admin/product/update',
       'admin/product/delete',
       'admin/products/upload/check',
    ];
}
