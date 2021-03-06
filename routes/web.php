<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DivisionController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\User\PostController;
use App\Models\Post;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

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
    $posts = Post::where('status', 1)->get();
    $reviews = Review::get()->take(6);
    return view('user.index', compact('posts','reviews'));
});

Auth::routes();

//give blood

Route::get('/give/blood', [App\Http\Controllers\User\UserDashboardController::class, 'why_blood']);
Route::get('/prepare', [App\Http\Controllers\User\UserDashboardController::class, 'prepare']);
Route::get('/eligiblity', [App\Http\Controllers\User\UserDashboardController::class, 'eligiblity']);


Route::get('/donation/process', [App\Http\Controllers\User\UserDashboardController::class, 'donation_process']);
Route::get('about', [App\Http\Controllers\User\UserDashboardController::class, 'about']);
Route::get('contact', [App\Http\Controllers\User\UserDashboardController::class, 'contact']);
Route::post('contact/store', [App\Http\Controllers\User\UserDashboardController::class, 'contact_store']);
Route::get('/blood/post', [App\Http\Controllers\User\PostController::class, 'post_list']);
Route::get('post/detail/{id}', [App\Http\Controllers\User\PostController::class, 'detail']);
Route::get('review', [App\Http\Controllers\User\ReviewController::class, 'list']);
Route::get('donor-search', [App\Http\Controllers\User\DonorSearchController::class, 'index']);

// donor-search

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["as"=>'user.', "prefix"=>'user',  "middleware"=>['auth','user']],function(){
    Route::get('dashboard', [App\Http\Controllers\User\UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\User\UserDashboardController::class, 'logout']);
    Route::get('/post/create', [App\Http\Controllers\User\PostController::class, 'create']);
    Route::post('/post/store', [App\Http\Controllers\User\PostController::class, 'store']);
    Route::get('/post/list', [App\Http\Controllers\User\PostController::class, 'index']);
    Route::get('/review', [App\Http\Controllers\User\ReviewController::class, 'index']);

    Route::get('/review/create', [App\Http\Controllers\User\ReviewController::class, 'create']);
    Route::post('review/store', [App\Http\Controllers\User\ReviewController::class, 'store']);
    Route::post('post/comment/store/{id}', [App\Http\Controllers\User\CommentController::class, 'store']);


});

Route::group(["as"=>'admin.', "prefix"=>'admin', "middleware"=>['auth','admin']],function(){
    Route::get('dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('donor/search', [App\Http\Controllers\Admin\AdminDashboardController::class, 'donor']);
    //division
    Route::resource('division', DivisionController::class);
    //district
    Route::resource('district', DistrictController::class);
    //logout
    Route::get('logout', [App\Http\Controllers\Admin\AdminDashboardController::class, 'logout']);
    //post
    Route::get('post/index', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('post/status/{id}', [App\Http\Controllers\Admin\PostController::class, 'status']);
});
