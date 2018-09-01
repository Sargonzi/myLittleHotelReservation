<?php

namespace App\Http\Controllers\Admin;

use App\RoomType;
use Illuminate\Http\Request;
use App\Room;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        return View('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomTypes = RoomType::all();
        return View('admin.room.add', compact('roomTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $room = [
            'name' => $request->input('roomName'),
            'price' => $request->input('roomPrice'),
            'roomtype_id' => $request->input('roomType'),
            'hasTV' => $request->input('hasTV') ? '1' : '0',
            'hasWarmshower' => $request->input('hasWarmshower') ? '1' : '0',
            'hasBreakfast' => $request->input('hasBreakfast') ? '1' : '0',
            'maxPerson' => $request->input('maxPerson'),
            'status' => $request->input('status') ? '1' : '0'
        ];
        Room::create($room);
        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $room = Room::find($id);
        $roomType = RoomType::find($room->roomtype_id);
        return View('admin.room.detail', compact('room', 'roomType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
