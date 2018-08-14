<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissions
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
        if(! check_user_permissions($request))
        {
            alert()->error('Unauthorized access.')->autoclose(3000);

            return redirect()->back();
        }

        return $next($request);
    }
}
