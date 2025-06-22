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
        // 許可する言語コード
        $availableLocales = ['ja', 'en'];

        // セッションまたはクエリパラメータから言語を取得
        $lang = $request->query('lang') ?? session('locale', 'ja'); // デフォルトは'ja'

        // 言語コードが有効ならアプリケーションに設定
        if (in_array($lang, $availableLocales)) {
            app()->setLocale($lang);
            session(['locale' => $lang]); // セッションに保存
        }

        return $next($request);
    }
}
