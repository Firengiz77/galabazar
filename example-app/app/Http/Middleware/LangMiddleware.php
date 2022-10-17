<?php

namespace App\Http\Middleware;

use App\Models\Language;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangMiddleware
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

        // App::setLocale($request->segment(1));
        // session()->put('lang', $request->segment(1));
        // return $next($request);

        // if (in_array($request->segment(1), ['en', 'ru','az'])) {
        //     URL::defaults(['locale' => $request->segment(1)]);
        //     app()->setLocale($request->segment(1));
        // } else {
        //     URL::defaults(['locale' => 'az']);
        //     app()->setLocale('az');
        // }
        


        $lang = $request->lang ? $request->lang : 'az';
        $l = Language::where('language', $lang)->first();
        if ($l) {
            App::setLocale($request->lang);
            Carbon::setLocale($request->lang);
        } else {
            App::setLocale('az');
            Carbon::setLocale('az');
        }
        
        return $next($request);
    }
}
