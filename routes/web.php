<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
$posts=[];

if (auth()->check()) {
    $posts= auth()->user()->UsersCoolPosts() -> latest()->get();
    
}
    return view('home', ['posts'=> $posts]); 
});

Route::POST('/register', [UserController::class, 'register']);
Route::POST('/logout', [UserController::class, 'logout']);
Route::POST('/login', [UserController::class, 'login']);
// blog post related routes
Route::POST('/create_post', [PostController::class, 'create_post']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'actuallyUpdatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);
