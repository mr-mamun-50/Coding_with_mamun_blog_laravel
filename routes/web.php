<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('/posts/{id}', [UserController::class, 'sigle_post_view'])->name('single_post_view');
Route::get('/posts/category/{category_id}', [UserController::class, 'filter_by_category'])->name('filter_by_category');

Route::group(['middleware' => 'auth'], function () {

    Route::post('/posts/{id}/comment/store', [UserController::class, 'comment_store'])->name('comment_store');

    Route::get('/questions', [UserController::class, 'questions'])->name('questions');
    Route::post('/questions/store', [UserController::class, 'question_store'])->name('question_store');
    Route::delete('/questions/{id}/delete', [UserController::class, 'question_delete'])->name('question_delete');

    Route::get('/questions/answers/{id}', [UserController::class, 'question_answers'])->name('question_answers');
    Route::post('/questions/answers/{id}/store', [UserController::class, 'question_answer_store'])->name('question_answer_store');
    Route::delete('/questions/answers/{id}/delete', [UserController::class, 'question_answer_delete'])->name('question_answer_delete');

    Route::get('/questions/answers/{id}/like', [UserController::class, 'question_answer_like'])->name('question_answer_like');
    Route::get('/questions/answers/{id}/unlike', [UserController::class, 'question_answer_unlike'])->name('question_answer_unlike');

    Route::get('/contact', [UserController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [UserController::class, 'contact_store'])->name('contact_store');
});


require __DIR__ . '/auth.php';



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');

Route::post('/admin/login/store', [AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

    Route::resource('/admin/category', CategoryController::class);

    Route::resource('/admin/post', PostController::class);

    Route::resource('/admin/contact/messages', MessageController::class);
});
