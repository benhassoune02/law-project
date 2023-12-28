<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use Illuminate\Auth\Middleware as AuthMiddleware;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\ChatController;





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



Route::get('register/utilisateur', [ UtilisateurController::class ,'showRegistrationForm'])->name('utilisateur.register-utilisateur');
Route::post('register/utilisateur', [ UtilisateurController::class ,'register'])->name('register_utilisateur');
Route::get('home',[IdeaController::class,'home'])->name('home');
Route::get('/lawyers',[IdeaController::class , 'lawyers'])->name('lawyers');
Route::get('/' , [IdeaController::class , 'showImageSlider'])->name('showImageSlider');

 
Route::get( 'utilisateur-login' ,[ UtilisateurController::class ,'login'])->name('login_page');
Route::post('check',[UtilisateurController::class ,'check'])->name('check_utilisateur');
Route::prefix('utilisateur')->middleware('utilisateur')->group(function (){

    Route::get('/edit-profile', [UtilisateurController::class ,'edit'])->name('edit_profile');
    Route::post('/update-profile', [UtilisateurController::class ,'update'])->name('update_profile');
    Route::post('/update-password', [UtilisateurController::class ,'updatePassword'])->name('update_password');


    Route::get('utilisateur-dashboard',[UtilisateurController::class, 'newdash'])->name('utilisateur-dashboard');
    Route::get('contact',[IdeaController::class, 'contact'])->name('contact');
    Route::get('contact-utilisateur',[UtilisateurController::class, 'contactutilisateur'])->name('contact-utilisateur');

    Route::post('/storeIdea', [IdeaController::class, 'storeIdea'])->name('storeIdea');
    Route::delete('/ideas/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');
    Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('questions.editer');
    Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('questions.update');
    Route::get('/ajoutidea',[IdeaController::class , 'ajout'])->name('ajout');


    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');

    Route::post('/utilisateur-logout', [UtilisateurController::class, 'logout'])->name('utilisateur-logout');
    



});

require __DIR__.'/auth.php';


