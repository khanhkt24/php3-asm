<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them willdashboard
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/about", [HomeController::class, "aboutView"])->name("about");
Route::get("/contact", [HomeController::class, "contactView"])->name('contact');
Route::get("/tag", [HomeController::class, "tags"])->name('users.tag');

Route::get('/tags/{id}/posts', [HomeController::class, 'showPostsByTag'])->name('tags.posts');
Route::get("/detail/{id}", [HomeController::class, "detail"])->name('front.detal');
// Route::get('/', function () {
//     return view('frontends.layouts.login');
// });
// Route::get('/register', function () {
//     return view('frontends.layouts.register');
// });
Route::get('/detail', function () {
    return view('frontends.layouts.post-details');
});

Route::get('/home', [HomeController::class, 'dashboard'])->name('home');
Route::get('/header', [HomeController::class, 'header']);
Route::get('/navbar', [HomeController::class, 'navbar']);

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('tags', TagController::class);
    Route::resource('posts', PostController::class);
});


Auth::routes();


