<?php

use App\Models\PostRoom;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardRoomController;
/*

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
    return view('home', [
        "title" => "Home",
        "active" => "home"]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",       
        "name" => "fajarfaz",
        "email" => "fajarfaz@gmail.com",
        "division" => "it",
        "image" => "logo.jpg",
        "active" => "about"
    ]);
});




Route::get('/room', [RoomController::class,'index']);
//halaman single post
Route::get('/detail-room/{slug}', [RoomController::class,'show']);

Route::get('/categories',  function(Category $category){
    return view('categories', [
        'title'=> 'categories',
        'categories'=> Category::all(),
        "active" => "categories"
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('room', [
        'title'=> "Room By Category : $category->name",
        'posts'=> $category->posts->load('Category'),
        "active" => "categories"
      
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('/dashboard/room', DashboardRoomController::class)->middleware('auth');
