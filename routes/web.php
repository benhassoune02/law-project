<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/contact-user', [ProfileController::class, 'allIdeas'])->name('contact-user');  
    Route::get('/ideas/{id}', [ProfileController::class, 'show'])->name('idea.show');
    Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('comment.store');

    
    Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('ideas.edit');
    Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comment.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');
    
});



require __DIR__.'/auth.php';

