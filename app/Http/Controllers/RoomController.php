<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostRoom;
class RoomController extends Controller
{
    public function index()
    {
       
    return view('room', [
        "title" => "All Rooms",
        // "posts" => PostRoom::all()
        "posts" => PostRoom::with(['Category'])->latest()->get()
    ]);
    }
    public function show($slug)
    {
        return view('detail-room', [
        "title" => "Single Post",
        "room" => PostRoom::find($slug)]);
    }
}
