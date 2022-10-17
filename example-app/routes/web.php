<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('index');
Route::get('about',[App\Http\Controllers\MainController::class,'about'])->name('about');
Route::get('contact',[App\Http\Controllers\MainController::class,'contact'])->name('contact');
Route::get('gallery',[App\Http\Controllers\MainController::class,'gallery'])->name('gallery');
Route::get('shop_single/{id}',[App\Http\Controllers\MainController::class,'shop_single'])->name('shop_single');
Route::get('shop/{id}',[App\Http\Controllers\MainController::class,'shop'])->name('shop');
Route::post('sendmessage', [App\Http\Controllers\MainController::class, 'sendmessage'])->name('sendmessage');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


$locale = Request::segment(1);

if(in_array($locale, ['az','en','ru'])){
    app()->setLocale($locale);
}else{
    app()->setLocale('az');

    $locale = '';
}

Route::group([
    'prefix' => $locale
  ], function(){ 

    Route::get('/',[App\Http\Controllers\MainController::class,'index'])->name('index');
    Route::get(__('static.about'),[App\Http\Controllers\MainController::class,'about'])->name('about');
    Route::get(__('static.contact'),[App\Http\Controllers\MainController::class,'contact'])->name('contact');
    // Route::post('/send-mail', [App\Http\Controllers\MainController::class, 'sendmail'])->name('sendmail');
    Route::get(__('static.gallery'),[App\Http\Controllers\MainController::class,'gallery'])->name('gallery');
    Route::get(__('static.allproduct'),[App\Http\Controllers\MainController::class,'allproduct'])->name('allproduct');
    Route::get(__('static.shop_single').'/{id}/{id2}',[App\Http\Controllers\MainController::class,'shop_single'])->name('shop_single');
    Route::get(__('static.shop').'/{id}',[App\Http\Controllers\MainController::class,'shop'])->name('shop');
    Route::post(__('static.sendmessage'), [App\Http\Controllers\MainController::class, 'sendmessage'])->name('sendmessage');
    // Route::post('/send-mail', [App\Http\Controllers\MainController::class, 'sendmessage'])->name('sendmessage');
    Route::get('search',[App\Http\Controllers\MainController::class, 'search']);
    Route::post(__('static.thank'),[App\Http\Controllers\MainController::class, 'sendmail'])->name('sendmail');
  
});