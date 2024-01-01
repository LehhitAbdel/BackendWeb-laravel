<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsPostController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqController;
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


//-------PUBLIC-------    

//about us
Route::get('/about', [AboutController::class, 'show'])->name('about');

//contactform
Route::get('/contactform', [ContactFormController::class, 'index'])->name('contactform');
Route::post('/contactform', [ContactFormController::class, 'send'])->name('contact.send');

//myprofile
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');

//news posts
Route::get('/news', [NewsPostController::class,'index'])->name('news');

//faq
Route::get('faqs', [FaqController::class, 'publicIndex'])->name('faqs.publicIndex');

//-------AUTH USER------- 

Route::middleware('auth')->group(function () {
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//-------ADMIN------- 
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/news/create', [NewsPostController::class, 'create']);
    Route::post('/news', [NewsPostController::class, 'store']);
    Route::get('/news/{news}/edit', [NewsPostController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsPostController::class, 'update']);
    Route::delete('/news/{news}', [NewsPostController::class, 'destroy'])->middleware('admin')->name('news.destroy');


    Route::resource('faq-categories', FaqCategoryController::class);
    Route::resource('faqs', FaqController::class)->except(['index']);
});


});

require __DIR__.'/auth.php';
