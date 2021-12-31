<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/create', function () {
//     $data = PostController::index();
//     return view('create');
// })->middleware(['auth'])->name('create');

Route::get('/index', [PostController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('/create', [PostController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('/edit/{id}', [PostController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/destroy/{id}', [PostController::class, 'destroy'])->middleware(['auth'])->name('destroy');
Route::post('/update/{id}', [PostController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/', [PostController::class, 'home']);
Route::get('/show/{id}', [PostController::class, 'show']);
Route::get('/about', [PostController::class, 'about']);
Route::post('/store', [PostController::class, 'store'])->middleware(['auth'])->name('store');

require __DIR__.'/auth.php';
