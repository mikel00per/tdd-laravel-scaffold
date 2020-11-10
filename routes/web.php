<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
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


Route::group(['namespace' => '\Modules\Web\Controllers'],
    base_path('Modules/Web/routes.php'));

//Route::group(['namespace' => '\Modules\Admin\Controllers'],
//    base_path('Modules/Admin/routes.php'));

//Route::prefix('admin')->group(function () {
//    Auth::routes();
//});

//require '../Modules/Admin/routes.php';

//Route::get('/', function () {
//    return view('welcome');
//});



//Route::get('/home', [App\ App\Http\Controllers\HomeController::class, 'index'])->name('home');
