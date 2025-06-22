<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // セッションから言語設定を取得し、アプリケーションに適用
        $locale = Session::get('locale', 'ja'); // デフォルトは日本語
        App::setLocale($locale);
    }
}
