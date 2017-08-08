<?php

namespace App\Http\Middleware;

use Closure;
use App\LogRecord;

class Logger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next(LogRecord::log($request));
    }

    public function terminate($request, $response)
    {
        LogRecord::log($request, $response);
    }
}
