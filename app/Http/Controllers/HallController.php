<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HallController extends Controller
{
    public function index(Request $request): Response
    {
        if (isset($request->location) && isset($request->date) && isset($request->time)) {
            $halls = $this->getHalls($request);

        } else {
            $halls = Hall::all();
        }
        return response()->view('halls.index', ['halls' => $halls]);
    }

    private function getHalls(Request $request)
    {
        $halls = Hall::query();
        if (isset($request->location)) {
            $location = $request->location;
            $halls->where('location', 'like', "%$location%");
        }

        if (isset($request->date)) {
            $date = $request->date;
            $halls->whereDate('date', $date);
        }

        if (isset($request->time)) {
            $time = $request->time;
            $halls->whereTime('time', $time);
        }

        return $halls->get();


    }
}
