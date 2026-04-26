<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    // Otaqları siyahılamaq üçün
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Yeni otağı bazaya qeyd etmək üçün
    public function store(Request $request)
    {
        Room::create([
            'room_number' => $request->room_number,
            'room_type'   => $request->room_type,
            'price'       => $request->price,
        ]);

        return redirect()->back();
    }
    public function destroy($id)
{
    \App\Models\Room::destroy($id);
    return redirect()->back();
}
}
