<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class CheckPanelAdminAuthorize
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
        if (Auth::user() && Auth::user()->isPanelAdminAuthorize())
        {
            return $next($request);
        }

        Flashy::error("Vous n'avez pas l'autorisation d'accès");

        return redirect()->route('home_path');

//        return abort(403, 'Unauthorized action.');

    }
}
