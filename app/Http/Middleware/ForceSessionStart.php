<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ForceSessionStart
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->hasSession()) {
            $session = app('session');
            $session->start();
            $request->setLaravelSession($session);
        }
        
        return $next($request);
    }
}