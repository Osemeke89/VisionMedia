<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PageslinkController;
use App\Http\Controllers\ContactController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

// Route::post('/upload', [PostTasksController::class, 'upload']);

Route::get('/', [PagesController::class, 'index']);

//Route::get('/single/{slug}', [PageslinkController::class, 'single']);

Route::resource('/single', PostsController::class); 

Route::resource('/', PostsController::class);

Route::resource('/contact', ContactController::class);

Route::get('/contact', function () {
    return view('contact');
}); 

// Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/adminlog', [PagesController::class, 'adminlog']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/editors', [PagesController::class, 'editors']);

Auth::routes();

// Route::any('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/home', PostsController::class);

Route::get('/home', [PageslinkController::class, 'home']);

// Route::get('/home', function () {
//     return view('home');
// }); 

Route::get('/edit', [PageslinkController::class, 'editpost']);

Route::get('/{slug}/editpost', [PageslinkController::class, 'edit']);

Route::put('/{slug}/editpost', [PageslinkController::class, 'update']);

// Route::get('/edit', function () {
//     return view('edit');
// }); 

Route::resource('/delete', PostsController::class);

Route::get('/delete', [PageslinkController::class, 'delete']);

// Route::get('/delete', function () {
//     return view('delete')
//             ->with('posts', Post::orderBy('updated_at', 'DESC')->get());
// }); 

Route::get('/investigative', [PageslinkController::class, 'investigative']);

Route::get('/sports', [PageslinkController::class, 'sports']);

Route::get('/news', [PageslinkController::class, 'news']);

Route::get('/entertainment', [PageslinkController::class, 'entertainment']);


