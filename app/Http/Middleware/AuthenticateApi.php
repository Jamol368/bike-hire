<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class AuthenticateApi extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }

    protected function authenticate($request, array $guards)
    {
        $token = $request->query('api_token');
        if(empty($token)) {
            $token = $request->input('api_token');
        }
        if (empty($token)) {
            $token = $request->bearerToken();
        }

        if ($token === Auth::user()->getRememberToken()) return;
        $this->unauthenticated($request, $guards);
    }
}
