<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostRoom;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class RoomController extends Controller
{
    public function index()
    {
       $title='';
       if(request('category')){
        $category= Category::firstWhere('slug', request('category'));
        $title= ' in ' . $category->name;
       }

    return view('room', [
        "title" => "All Rooms". $title,
        // "posts" => PostRoom::all()

        "active" => "room",
        "posts" => PostRoom::latest()->filter(request(['search','category']))->paginate(9)->withQueryString()
    ]);
    }
    public function show($slug)
    {
        return view('detail-room', [
        "title" => "Single Post",
        "room" => PostRoom::find($slug),
          "active" => "room"
      ]);
    }
}
