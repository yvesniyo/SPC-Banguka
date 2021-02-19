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
            $name = SpatieReferer::get();

            $sitelink = "http://". $name;
            $domain_pieces = explode(".", parse_url($sitelink, PHP_URL_HOST));
            $l = sizeof($domain_pieces);
            if($l>1){
                $secondleveldomain = ($domain_pieces[$l-2] . "." . $domain_pieces[$l-1]);
            }
            Referer::create([
                "name" => $name == "" ?  "direct" : $secondleveldomain,
            ]);
        }
        return $next($request);
    }
}
