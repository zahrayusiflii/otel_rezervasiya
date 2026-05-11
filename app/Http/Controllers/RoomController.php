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
    public function show(Room $room)
{
    return view('rooms.show', compact('room'));
}

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index');
    }
    public function detail($type)
{
    $rooms = [
        'standart' => [
            'name' => 'Standart Room',
            'price' => 50,
            'image' => 'standard-room.jpg',
        ],
        'vip' => [
            'name' => 'VIP Room',
            'price' => 120,
            'image' => 'vip-room.jpg',
        ],
        'family' => [
            'name' => 'Family Room',
            'price' => 90,
            'image' => 'family-room.jpg',
        ],
        'deluxe' => [
            'name' => 'Deluxe Room',
            'price' => 100,
            'image' => 'deluxe-room.jpg',
        ],
    ];

    if (!isset($rooms[$type])) {
        abort(404);
    }

    $room = $rooms[$type];

    return view('rooms.show', compact('room'));
}

}


