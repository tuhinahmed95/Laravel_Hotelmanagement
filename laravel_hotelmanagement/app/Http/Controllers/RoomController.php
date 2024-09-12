<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;
use App\Http\Requests\StoreroomRequest;
use App\Http\Requests\UpdateroomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adData($room_id)

    {
        $room = room::findOrfail($room_id);
       return view('admin-pages.editroom',['room' =>$room]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function roomstore()
    {
        return view('admin-pages.roomform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function roomadd(StoreroomRequest $request)
    {
        $room = new room;
        $room->one = $request->one;
        $room->two = $request->two;
        $room->three = $request->three;
        $room->four = $request->four;
        $room->five = $request->five;
        $room->six = $request->six;
        $room->save();
        return Redirect('/vroom');
    }

    /**
     * Display the specified resource.
     */
    public function showroom()
   
    {
        $rooms = room::all();
        return view('admin-pages.vroom',compact('rooms'));
       
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function upData( $room_id, StoreroomRequest $request)
    {
        $room = room::findOrfail( $room_id);
       
        $room->one = $request->one;
        $room->two = $request->two;
        $room->three = $request->three;
        $room->four = $request->four;
        $room->five = $request->five;
        $room->six = $request->six;
        $room->save();
        return Redirect('/vroom');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteroom( $room_id)
    {
        $room = room::findOrfail( $room_id);
        $room->delete();
        return Redirect('/vroom');
    }
}
