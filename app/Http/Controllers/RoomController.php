<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $rooms = Room::query()
            ->when($search, function ($query, $search) {
                $query->where('room_number', 'like', "%{$search}%")
                      ->orWhere('room_type', 'like', "%{$search}%")
                      ->orWhere('price', 'like', "%{$search}%");
            })
            ->get();

        $totalRooms = Room::count();
        $emptyRooms = Room::where('status', 'bos')->count();
        return view('welcome', compact('rooms', 'totalRooms', 'emptyRooms', 'search'));

    }

    public function store(Request $request)
    {
        Room::create([
    'room_number' => $request->room_number,
    'room_type' => $request->room_type,
    'price' => $request->price,
    'status' => $request->status,
]);


        return redirect()->back();
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index');
    }
}

