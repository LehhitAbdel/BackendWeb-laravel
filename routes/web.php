<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\FAQCategoryController;
use App\Http\Controllers\FAQQuestionController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\AboutController;

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

Route::get('/news', function () {
    return view('news');
})->middleware([])->name('news');


//-------PUBLIC-------    

//about us
Route::get('/about', [AboutController::class, 'show'])->name('about');

//contactform
Route::get('/contactform', [ContactFormController::class, 'index'])->name('contactform');
Route::post('/contactform', [ContactFormController::class, 'send'])->name('contact.send');

//myprofile
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');



Route::middleware('auth')->group(function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    
    //FAQ
});

require __DIR__.'/auth.php';
