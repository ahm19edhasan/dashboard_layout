<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AdsController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Web\PagesController;
use App\Http\Controllers\Web\ShareController;
use App\Http\Controllers\Web\CategoriesController;
use App\Http\Controllers\Dashboard\AdminsController;
use App\Http\Controllers\Dashboard\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::get('/', function () {
//    return view('web.home');
//})->name('home');


require __DIR__ . '/auth.php';
// require __DIR__ . '/dashboard.php';
// require __DIR__ . '/user.php';


// Start Index Dashboard
Route::get(LaravelLocalization::setLocale() . '/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth:admin,web'])
    ->name('dashboard.home');
// End Index Dashboard

Route::middleware(['auth:web'])
    ->prefix(LaravelLocalization::setLocale().'/dashboard')
    ->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');

    // Start Admin Routes
    Route::controller(AdminsController::class)
        ->prefix('admins')
        ->as('admin.')
        ->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}/edit', 'edit')->name('edit');
            Route::put('/{id}', 'update')->name('update');
            Route::get('/delete', 'destroy')->name('delete');
        });
    // End Admin Routes

});
