<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;


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
    // return view('welcome');
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Yayan Maulana',
        'email' => 'maulana24@live.com',
        'image' => 'face.png'
    ]);
});
Route::get('/blog', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Posts by Category : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Posts by Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
