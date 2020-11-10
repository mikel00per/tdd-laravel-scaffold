<?php

namespace Modules\Web;

use Illuminate\Support\Facades\Route;
use Modules\Web\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'root'])->name('index');

Route::get('/{page}', '\Modules\Web\Controllers\PagesController')
    ->name('page')
    ->where('page','about|contact|terms');

Route::resource('posts','\Modules\Web\Controllers\PagesController')->only([
    'index', 'show'
]);
