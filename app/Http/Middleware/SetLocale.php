<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        // langクエリパラメータがあるかチェック
        $lang = $request->query('lang');

        // 許可する言語コードを配列で指定
        $availableLocales = ['ja', 'en'];

        if ($lang && in_array($lang, $availableLocales)) {
            app()->setLocale($lang);
        }

        return $next($request);
    }
}
