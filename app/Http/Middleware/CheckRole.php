<?php

namespace App\Http\Middleware;

use Closure;


class CheckRole
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


       /* if (! $request->user()->hasRole($role)) {
                    
            alert()->info('You do not have permissions to perform this action.')->autoclose(3000);
            //Session::flash('info', 'You do not have permissions to perform this action.');

            return redirect()->back();
            }
        */
            return $next($request);
    }
}
