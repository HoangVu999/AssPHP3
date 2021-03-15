<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\admin\ViewController;
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
// Route::view('/', 'client.layouts.main');
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('post/detail/{id}', [HomeController::class, 'detail'])
        ->name('post.detail');
Route::post('post/api/tang-view', [HomeController::class, 'upView'])
        ->name('post.upView');
Route::get('post-with-cate/{id}', [HomeController::class, 'postList'])
        ->name('post.list');        
Route::get('search', [HomeController::class, 'search'])
        ->name('post.search');        



Route::view('admin', 'admin.layouts.main')
    ->middleware('check-admin-role')
    ->name('dashboard');

Route::view('login', 'admin.auth.login')->name('login');
Route::post('login', [LoginController::class, 'postLogin']);
Route::any('logout', function () {
    Auth::logout();
    return redirect(route('login'));
})->name('logout');

Route::prefix('admin/category')
    ->middleware('check-admin-role')
    ->group(function(){
        Route::get('/', [CategoryController::class, 'index'])
            ->name('cate.index');
        Route::get('{id}/removeCate', 
            [CategoryController::class, 'remove'])->name('cate.remove');
        Route::get('add', [CategoryController::class, 'addForm'])->name('cate.add');
        Route::post('add', [CategoryController::class, 'saveAdd']);
        Route::get('edit/{id}', [CategoryController::class, 'editForm'])->name('cate.edit');
        Route::post('edit', [CategoryController::class, 'saveEdit'])->name('cate.edit.post');
    });

Route::prefix('admin/post')
    ->middleware('check-admin-role')
    ->group(function(){
        Route::get('/', [PostController::class, 'index'])
            ->name('post.index');
        Route::get('{id}/remove', 
            [PostController::class, 'remove'])->name('post.remove');
        Route::get('add', [PostController::class, 'addForm'])->name('post.add');
        Route::post('add', [PostController::class, 'saveAdd']);
        Route::get('edit/{id}', [PostController::class, 'editForm'])->name('post.edit');
        Route::post('edit', [PostController::class, 'saveEdit'])->name('post.edit.post');
    });

Route::get('admin/view', [ViewController::class, 'index'])->name('view.index');  

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
\UniSharp\LaravelFilemanager\Lfm::routes();
});

