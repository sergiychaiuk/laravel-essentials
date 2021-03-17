<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|JsonResponse|Response|View
     */
    public function __invoke(Request $request, $roomType = null)
    {
        if (isset($roomType)) {
            $rooms = Room::where('room_type_id', '!=', $roomType)->get();
        } else {
            $rooms = Room::get();
        }
        return view('rooms.index', ['rooms' => $rooms]);
    }
}
