<?php

require_once './vendor/autoload.php';

/*****************************
* 서비스 프로바이더가 하는 일
  - 데이터베이스 연결
  - 세션을 켜는 일
  - 에러 핸들러 등록하기
  - 환경 설정하기 등…
*****************************/    

use Eclair\Support\ServiceProvider;
use Eclair\Application;

class SessionServiceProvider extends ServiceProvider
{
    public function register()
    {
        // session_set_save_handler

        // Route::add ...
    }

    public function boot()
    {
        // session_start();

        // Route::run();
    }
}

$app = new Application([
    SessionServiceProvider::class
]);

$app->boot();
