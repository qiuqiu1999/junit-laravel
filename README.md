## qiuqiu1999/junit-laravel

#### 对于框架的要求
Laravel >= 5.1 & PHP >= 7.1.3

#### 安装方式

```
composer require "qiuqiu1999/junit-laravel"
```

#### 配置方式

> 在config/app.php中进行服务注册
```
/*
|--------------------------------------------------------------------------
| Autoloaded Service Providers
|--------------------------------------------------------------------------
|
| The service providers listed here will be automatically loaded on the
| request to your application. Feel free to add your own services to
| this array to grant expanded functionality to your applications.
|
*/
    
'providers' => [
        ... ,
        QiuQiu1999\JunitLaravel\Providers\JunitServiceProvider::class
],
```

#### 路由
```
Route::get('/', 'JunitController@index');                       // 测试主页
Route::post('/', 'JunitController@store')->name('junit.store'); // 提交
```

#### License

MIT