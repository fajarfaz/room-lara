<?php

namespace App\Models;

class PostRoom 
{
    private static $room_posts = [
        [
            "title" => "Ruang Meeting 1",
            "slug" => "ruang-meeting-1",
            "status" => "Kosong",
            "desc" => "Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which| contains the  middleware group. Now create something great!"
        ],
        [
            "title" => "Ruang Meeting 2",
            "slug" => "ruang-meeting-2",
            "status" => "Dipakai",
            "desc" => "Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which| contains the  middleware group. Now create something great!"
        ],
    ];

public static function all()
{
    return collect(self::$room_posts);
}
public static function find($slug)
{
    $room= static::all();  //pencarian dengan collection 
    // $room = []; //pencarian manual looping
    // foreach($rooms as $search_room){
    //     if($search_room["slug"] === $slug){
    //         $room = $search_room;
    //     }
    // }
    return $room->firstWhere('slug',$slug); //pencarian dengan collection direturn disini
}
}
