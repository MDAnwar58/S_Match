<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Cache;
use Closure;

class UserActivity
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
        if (Auth::check()) {
            $expiresAt = now()->addMinutes(1);
            Cache::put('user-is-online-' . Auth::user()->id,true,$expiresAt);
            // user last seen
            User::where('id', Auth::user()->id)->update([ 'last_seen'=>now() ]);
        }
        return $next($request);
    }
}
