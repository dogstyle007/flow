<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;
use Session;
use Alert;

class RedirectIfNotAdmin
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
      

        if( $request->user() && $request->user()->admin != 1 )
        {
            alert()->info('You do not have permissions to perform this action.')->autoclose(3000);
            //Session::flash('info', 'You do not have permissions to perform this action.');

            return redirect()->back();
        }

        return $next($request);
    }
}
