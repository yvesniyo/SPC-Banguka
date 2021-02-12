<?php

namespace App\Http\Middleware;

use App\Models\Referer;
use Closure;
use Illuminate\Http\Request;
use Facades\Spatie\Referer\Referer as SpatieReferer;

class SaveUserSessionRefererMiddleware
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
        $referer_set = session("referer_set", null);
        if (!$referer_set) {
            $request->session()->put("referer_set", "yes");
            Referer::create([
                "name" => SpatieReferer::get(),
            ]);
        }
        return $next($request);
    }
}
