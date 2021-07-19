<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
       if (!auth()->user()->admin) {
        
            session()->flash('message', 'Votre statut ne vous donne pas un droit d\'accès &#x1f444;!!');
            return abort(403);
        }

        return $next($request);
    }
}
