<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\MainControllers;


Route::get('admin/users/login', [LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class,'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function ()
    {
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);


        #Config
        Route::prefix('configs')->group(function () {
            Route::get('add', [ConfigController::class, 'create']);
            Route::post('add', [ConfigController::class, 'update']);
        });

        #Menu
        Route::prefix('menus')->group(function ()
        {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #News
        Route::prefix('news')->group(function ()
        {
            Route::get('add', [NewsController::class, 'create']);
            Route::post('add', [NewsController::class, 'store']);
            Route::get('list', [NewsController::class, 'index']);
            Route::get('edit/{new}', [NewsController::class, 'show']);
            Route::post('edit/{new}', [NewsController::class, 'update']);
            Route::DELETE('destroy', [NewsController::class, 'destroy']);
        });

        #Sliders
        Route::prefix('sliders')->group(function()
        {
            Route::get('add',[SliderController::class,'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}',[SliderController::class,'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);

        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);





    });

});
Route::get('/',[MainControllers::class,'index']);






