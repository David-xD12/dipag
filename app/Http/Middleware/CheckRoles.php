<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $roles = array_slice(func_get_args(), 2);

        if (auth()->user()->hasRoles($roles)) {
            return $next($request);
        }

        return redirect('/dashboard');
    }
}
