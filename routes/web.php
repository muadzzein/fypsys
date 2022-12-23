<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
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

Route::get("/",[homeControl::class,"index"]);
Route::get("/users",[adminControl::class,"user"]);
Route::POST("/add", [adminControl::class, 'addData']);
// Route::POST('/find/{id}', [homeControl::class, 'listOut']);
// Route::POST("/edit", [homeControl::class, 'update']);
Route::get("/list", [homeControl::class, 'show']);
Route::get('upd/{id}', [homeControl::class, 'showData']);
Route::POST('edit', [homeControl::class, 'updateData']);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
