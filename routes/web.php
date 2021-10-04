<?php

use App\Models\PostRoom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Models\Category;
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
        "title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",       
        "name" => "fajarfaz",
        "email" => "fajarfaz@gmail.com",
        "division" => "it",
        "image" => "logo.jpg"
    ]);
});





//halaman single post

Route::get('/room', [RoomController::class,'index']);
Route::get('/detail-room/{slug}', [RoomController::class,'show']);

Route::get('/categories',  function(Category $category){
    return view('categories', [
        'title'=> 'categories',
        'categories'=> Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('room', [
        'title'=> "Room By Category : $category->name",
        'posts'=> $category->posts->load('Category'),
      
    ]);
});