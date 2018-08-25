<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\UnauthorizedException;

class AdminMiddleware
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
        if (auth()->check()){
            if (! $request->user()->isAdmin()) {
                throw new UnauthorizedException('This area is for Admin Only');
            }
        }
        return $next($request);
    }
}
