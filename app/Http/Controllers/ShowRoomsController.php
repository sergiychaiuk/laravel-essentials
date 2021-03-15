<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|JsonResponse|Response|View
     */
    public function __invoke(Request $request)
    {
        $rooms = DB::table('rooms')->get();
        if ($request->query('id') !== null) {
            $rooms = $rooms->where('room_type_id', $request->query('id'));
        }
        return view('rooms.index', ['rooms' => $rooms]);
    }
}
