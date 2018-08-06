<?php

namespace App\Http\Middleware;

use Closure;
use User;
use Alert;
use Auth;

class RedirectIfNotApproved
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

        if( $request->user() && $request->user()->approved != 1)
        {
            alert()->info('Awaiting member confirmation.', 'Can\'t perform this action')->autoclose(3000);

            return redirect()->back();
        }

        return $next($request);
    }
}
