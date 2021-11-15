<?php

namespace App\Http\Middleware;

use Closure;

class Honeypot
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
        if (! $request->has('honeypot') || ! empty($request->honeypot) || now()->timestamp - $request->filled_at <= 5)
            abort(406, 'Spam detected.');

        return $next($request);
    }
}
