<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = 'en'; // set en as the fallback locale
        if ($request->is('/ar/*')) { // if the route starts with /es/* set locale to ES
            $locale = 'ar';
        }

        //set the derived locale
        App::setLocale($locale);

        return $next($request);
    }
}
