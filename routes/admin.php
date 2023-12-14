<?php

use App\Http\Controllers\admin\AdminUtilisateurController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('admin/dashboard/home',[AdminHomeController::class ,'index'])->name('admin.dashboard.home');
Route::get('admin/login',[AdminLoginController::class ,'login'])->name('admin.dashboard.login');
Route::post('admin/login',[AdminLoginController::class ,'checklogin'])->name('admin.dashboard.check');
Route::delete('/user/{id}', [ProfileController::class, 'destroyuser'])->name('user.destroy');
Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');

Route::prefix('admin')->middleware('admin')->group(function (){

    Route::get('admin-dashboard', [AdminLoginController::class, 'dash'])->name('admin-dashboard');
    Route::get('utilisateurs', [AdminUtilisateurController::class, 'index'])->name('admin.utilisateurs.index');
    Route::post('utilisateurs/store', [AdminUtilisateurController::class, 'store'])->name('admin.utilisateurs.store');
    Route::delete('utilisateurs/{id}', [AdminUtilisateurController::class, 'destroy'])->name('admin.utilisateurs.destroy');

    Route::get('questions', [AdminUtilisateurController::class, 'questionindex'])->name('admin.adminquestions.index');
    Route::get('users', [AdminUtilisateurController::class, 'userindex'])->name('admin.adminusers.index');
    Route::get('comments', [AdminUtilisateurController::class, 'commentindex'])->name('admin.admincomments.index');

    Route::post('/add-user', [AdminUtilisateurController::class, 'addUser'])->name('admin.addUser');

    Route::post('/admin-logout', [AdminLoginController::class, 'adminlogout'])->name('admin-logout');
    Route::get('/admin-dashboard', [AdminLoginController::class, 'admindashboard'])->name('admin-dashboard');


    Route::post('/admin/approveIdea/{idea}', [AdminUtilisateurController::class,'approveIdea'])->name('admin.approveIdea');
    Route::post('/admin/approveUtilisateur/{utilisateur}', [AdminUtilisateurController::class,'approveUtilisateur'])->name('admin.approveUtilisateur');

});

require __DIR__.'/auth.php';