<?php

namespace Modules\Admin;


use Illuminate\Support\Facades\Route;
use Modules\Admin\Panel\Controllers\PanelController;
use Modules\Admin\Posts\Controllers\PostsController;


Route::prefix('admin')->group(function (){
    // Ruta principal del panel
    Route::get('/', [PanelController::class, 'home'])->name('home');

    // Submódulo de autentificación
    Route::group(['namespace' => 'Modules\Admin\Auth'],function (){
        // Log-in/out etc
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'ResetPasswordController@reset');
    });

    // Submódulo de Posts
    Route::resource('posts',PostsController::class, ["as" => "admin"]); // as añade al name del route

    // Submódulo de Panel

    // Submódulo de creación de emails.

    // Submódulo de asignación de roles.

    // Submódulo de asignación de notificaciones.

    // Submódulos de traducciones (Ya se incliyen las rutas.)

});


