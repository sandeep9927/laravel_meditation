<?php

namespace App\Http\Middleware;
use Cache;
use Auth;
use App\User;
use Carbon\Carbon;
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
        if(Auth::check()){
            $expireAt = Carbon::now()->addMinutes(1);
            Cache::put('user-is-online-'. Auth::user()->id,true, $expireAt);
            // User::where('id', Auth::user()->id)->update(['updated_at' => Carbon::now()]);
        }
        return $next($request);
    }
}
