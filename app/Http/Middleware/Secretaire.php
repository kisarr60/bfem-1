<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Secretaire
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
        if (auth()->user()->status == 'secretaire' || auth()->user()->admin == '1') {

            return $next($request);
        }

        session()->flash('message', 'Vous êtes ' . auth()->user()->status .' . Votre statut ne vous donne pas un droit d\'accès. &#x1f444;!!');
        return abort(403);
    }
}
