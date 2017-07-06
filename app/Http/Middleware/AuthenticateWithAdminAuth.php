<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Auth\Middleware\Authenticate;

class AuthenticateWithAdminAuth extends Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($guards);

        foreach (Auth::user()->role as $role) {
            if ($role->name == 'admin') {
                return $next($request);
            }
        }

        return abort(404);
    }
}
