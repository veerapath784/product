<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleWare
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
        if (!auth()->check() or auth() -> user() -> user_type_id != 1) {
            return abort(403);
        } else {
            return $next($request);
        }
    }
}
