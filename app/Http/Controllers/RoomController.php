<?php


namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $totalRooms = $rooms->count();
        // Boş otaqlar və bugünkü girişlər üçün məntiqi bura əlavə edə bilərsən
        return view('welcome', compact('rooms', 'totalRooms'));
    }

    public function store(Request $request)
    {
        Room::create([
            'room_no' => $request->room_no,
            'type' => $request->type,
            'price' => $request->price,
        ]);

        return redirect()->back();
    }
}
?>
