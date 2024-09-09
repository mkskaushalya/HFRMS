<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\HallBooking;
use App\Models\HallLocation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HallController extends Controller
{
    public function index(Request $request): Response
    {
        $locations = HallLocation::all();
        if (isset($request->location) && isset($request->date) && isset($request->time)) {
            $halls = $this->getHalls($request);

        } else {
            $halls = Hall::all();

        }
        return response()->view('halls.index', ['halls' => $halls, 'locations' => $locations]);
    }

    private function getHalls(Request $request)
    {
        $halls = HallBooking::query();
        $halls->where('location', $request->location);


        return $halls->get();


    }
}
