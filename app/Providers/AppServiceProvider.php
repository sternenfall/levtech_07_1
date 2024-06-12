<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        \URL::forceScheme('https'); //追加
        $this->app['request']->server->set('HTTPS','on');
        Paginator::useBootstrap();    //動画
       // Paginator::useBootstrapFive();    公式ドキュメント
       //または Paginator::useBootstrapFour();    公式ドキュメント
    }
}
