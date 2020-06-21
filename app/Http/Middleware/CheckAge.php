<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        echo "global middleware";
        if($request->query('age') && $request->query('age')<20){
            return redirect('noaccess');
        }
        return $next($request);
    }
}
