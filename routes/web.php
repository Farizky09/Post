<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Models\Post;

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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ahmad Farizky",
        "email" => "ahmadfarizky26082004@gmail.com",
        "image" => "0001.jpg"
    ]);
});

Route::get('/posts', [PostController::class,'index']);
Route::get('posts/{post:slug}/{id}',[PostController::class,'show']);
Route::post('posts/update/{id}',[PostController::class,'update'])->name('updatePost');
Route::post('post/{id_post}/comment/insert',[CommentController::class,'insert'])->name('insertComment');
Route::get('post/delete/{id}',[PostController::class,'delete'])->name('deletePost');

//Comment
 


Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::post('admin/post/insert/',[PostController::class,'insert'])->name('insertPost');
Route::get('/admin', function()
{
    return view('admin',["posts" => Post::all()]);
});
Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', [LogoutController::class ,'logout']);
});
Route::get('/admin/dashboard' , 'App\Http\controllers\PostController@dashboard');