<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;
use Session;
use Alert;

class RedirectIfNotModerator
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
        if( $request->user() && $request->user()->moderator != 1)
        {
            alert()->info('You do not have permissions to perform this action.')->autoclose(3000);
            
            return redirect()->back();
        }

        return $next($request);
    }
}
