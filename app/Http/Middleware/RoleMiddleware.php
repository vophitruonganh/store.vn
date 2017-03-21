<?php

namespace Xstore\Http\Middleware;
use Illuminate\Foundation\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Session;
use Cookie;
class RoleMiddleware
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
        return $next($request);
    }
}
