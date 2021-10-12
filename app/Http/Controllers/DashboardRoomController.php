<?php

namespace App\Http\Controllers;

use App\Models\PostRoom;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    return view('dashboard.room.index',[
        'title' => 'Room Editing',
        'rooms' => PostRoom::all()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostRoom  $postRoom
     * @return \Illuminate\Http\Response
     */
    public function show(PostRoom $postRoom)
    {
        dd($postRoom);
        // return view('dashboard.room.show',[
        //     'room' => $postRoom,
        //     'title' => 'Room Editing'
        
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostRoom  $postRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(PostRoom $postRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostRoom  $postRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostRoom $postRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostRoom  $postRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRoom $postRoom)
    {
        //
    }
}
