<?php

use Carbon\Carbon;
use App\Models\Language;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//\Illuminate\Support\Facades\Auth::routes();
//Route::redirect('/admin', '/admin/resources/orders');
//Route::redirect('/admin/dashboards/main', '/admin/resources/orders');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::post('nova2/login', [\App\Http\Controllers\NovaNewAuthController::class, 'authLogin'])->name('nova.new.auth');

//Route::redirect('/', function () {
//    return redirect()->route('front.index', ['lang' => app()->getLocale()]);
//});
Route::get('/', function () {
    return redirect()->route('index', ['lang' => app()->getLocale()]);
});

Route::group(['prefix' => '{lang}', 'middleware' => 'lang2', 'where' => [
    'lang' => Language::select('language')->get()->pluck('language')->implode('|')
],], function () {

    Route::get('/404notfound', function () {
        return view('front.pages.404page');
    })->name('404page');

    Route::get('/lang', function ($lang) {
        $url = explode('/', url()->previous());
        $url[3] = $lang;
        app()->setLocale($lang);
        Carbon::setLocale($lang);
        return redirect(implode('/', $url));
    })->name('lang');
    
    Route::get('/home', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('index');
    Route::get('/about_us', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('about');
    Route::get('/room', [App\Http\Controllers\Front\HomeController::class, 'room'])->name('room');
    Route::get('/menu', [App\Http\Controllers\Front\HomeController::class, 'menu'])->name('menu');
    Route::get('/rooms/{id}', [App\Http\Controllers\Front\HomeController::class, 'about_room'])->name('about_room');
    Route::get('/dish/{id}', [App\Http\Controllers\Front\HomeController::class, 'dishes'])->name('dishes');


    Route::get('/pages/{page}/{title?}', [App\Http\Controllers\Front\HomeController::class, 'pages'])->name('pages');

    //Auth start
    Route::get('/logout', [App\Http\Controllers\Front\AuthController::class, 'logout'])->name('logout');
    Route::get('/page/auth', [App\Http\Controllers\Front\AuthController::class, 'singInUp'])->name('singInUp');
    Route::post('/signin', [App\Http\Controllers\Front\AuthController::class, 'login'])->name('login');
    Route::post('/signup', [App\Http\Controllers\Front\AuthController::class, 'register'])->name('register');
    Route::post('/forgot_post', [App\Http\Controllers\Front\AuthController::class, 'forgot_post'])->name('forgot_post');
    Route::post('/reset_post', [App\Http\Controllers\Front\AuthController::class, 'reset_post'])->name('reset_post');
    //Auth end

    //Account Start
    Route::group(['as' => 'account.', 'prefix' => '/account', 'middleware' => 'account_auth'], function () {
        Route::get('/address', [App\Http\Controllers\Front\HomeController::class, 'address'])->name('address');
        Route::post('/address_post', [App\Http\Controllers\Front\AccountController::class, 'address_post'])->name('address_post');
        Route::put('/address_put', [App\Http\Controllers\Front\AccountController::class, 'address_put'])->name('address_put');
        Route::delete('/address_delete', [App\Http\Controllers\Front\AccountController::class, 'address_delete'])->name('address_delete');
        Route::get('/orders', [\App\Http\Controllers\Front\AccountController::class, 'orders'])->name('orders');
        Route::get('/personal/info', [\App\Http\Controllers\Front\AccountController::class, 'account_get'])->name('account_get');
        Route::post('/personal/info', [\App\Http\Controllers\Front\AccountController::class, 'account_post'])->name('account_post');
    });
    //Account end
});

