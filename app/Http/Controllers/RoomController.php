<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; // Modelimizi daxil edirik

class RoomController extends Controller
{
    // Səhifəni və otaqları göstərmək üçün
    public function index()
    {
        $rooms = Room::all(); // Bütün otaqları bazadan çək
        return view('welcome', compact('rooms'));
    }

    // Yeni otaq əlavə etmək üçün
    public function store(Request $request)
    {
        // Formadan gələn məlumatların yoxlanılması
        $request->validate([
            'room_no' => 'required|unique:rooms',
            'type'    => 'required',
            'price'   => 'required|numeric'
        ]);

        // Bazaya yazma əməliyyatı
        Room::create([
            'room_no' => $request->room_no,
            'type'    => $request->type,
            'price'   => $request->price
        ]);

        return redirect()->back()->with('success', 'Otaq əlavə edildi!');
    }
}