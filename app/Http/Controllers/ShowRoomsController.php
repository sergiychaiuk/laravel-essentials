<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse|Response
     */
    public function __invoke(Request $request)
    {
        $rooms = DB::table('rooms')->get();
        if ($request->query('id') !== null) {
            $rooms = $rooms->where('room_type_id', $request->query('id'));
        }
        return response()->json($rooms);
    }
}
