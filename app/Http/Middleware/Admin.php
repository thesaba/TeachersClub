<?php

namespace App\Http\Middleware;

use Auth;
use App\User;
use Closure;

class Admin
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
        if (! Auth::check() || ! User::isAdmin(Auth::user()->id))
        {
            return redirect()->route('getSysLogin');
        }

        return $next($request);
    }
}
