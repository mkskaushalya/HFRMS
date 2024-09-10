<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\HallLocation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HallController extends Controller
{
    public function index(Request $request): Response
    {
        $request->validate([
            'location' => 'nullable|exists:hall_locations,id',
            'booking_date' => 'nullable|date',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i',
        ]);

        $location = $request->location;

        $date = $request->booking_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;
        $data = true;

        if ($location == null || $date == null || $start_time == null || $end_time == null) {
            $halls = Hall::all();

        } else {
            $halls = $this->getAvailableHalls($location, $date, $start_time, $end_time);
            $data = false;
        }

        $locations = HallLocation::all();

        return response()->view('halls.index', ['halls' => $halls, 'locations' => $locations, 'request' => $request, 'data' => $data]);
    }

    function getAvailableHalls($location, $date, $start_time, $end_time)
    {
        $date = Carbon::parse($date); // Parse the given date
        $start_time = Carbon::parse($start_time)->format('H:i:s'); // Format the start time
        $end_time = Carbon::parse($end_time)->format('H:i:s'); // Format the end time

        $hallLocation = HallLocation::find($location); // Find the hall location
        $halls = $hallLocation->halls; // Get the halls in the location

        // Get the available halls
        return $this->getHall($halls, $date, $start_time, $end_time);
    }

    function getHall($halls, $date, $start_time, $end_time)
    {
        $availableHalls = []; // Initialize an empty array to store available halls

        // Loop through the halls

        foreach ($halls as $hall) {
            $bookings = $hall->bookings; // Get the bookings for the hall
            $isAvailable = $this->checkBooking($bookings, $date, $start_time, $end_time); // Check if the hall is available

            // If the hall is available, add it to the available halls array
            if ($isAvailable) {
                $availableHalls[$hall->id] = $hall;
            }

        }
        return $availableHalls;
    }

    function checkBooking($bookings, $date, $start_time, $end_time)
    {
        $isAvailable = true; // Initialize a variable to check if the hall is available

        // Loop through the bookings

        foreach ($bookings as $booking) {
            $bookingDate = Carbon::parse($booking->booking_date); // Parse the booking date
            $bookingStartTime = Carbon::parse($booking->start_time)->format('H:i:s'); // Format the booking start time
            $bookingEndTime = Carbon::parse($booking->end_time)->format('H:i:s'); // Format the booking end time

            // Check if the given date is the same as the booking date

            if ($date == $bookingDate) {
                // Check if the given start time is between the booking start and end time

                if ($start_time >= $bookingStartTime && $start_time <= $bookingEndTime) {
                    $isAvailable = false; // Set the hall as not available
                    break; // Break the loop
                }

                // Check if the given end time is between the booking start and end time

                if ($end_time >= $bookingStartTime && $end_time <= $bookingEndTime) {
                    $isAvailable = false; // Set the hall as not available
                    break; // Break the loop
                }

                // Check if the given start and end time are outside the booking start and end time

                if ($start_time <= $bookingStartTime && $end_time >= $bookingEndTime) {
                    $isAvailable = false; // Set the hall as not available
                    break; // Break the loop
                }
            }
        }
        return $isAvailable;
    }

    public function show(Hall $hall, Request $request): Response
    {
        if (isset($request->booking_date) && isset($request->start_time) && isset($request->end_time)) {
            $hallAvailability = $this->checkHallAvailability($hall, $request->booking_date, $request->start_time, $request->end_time);
        } else {
            $hallAvailability = null;
        }
        return response()->view('halls.show', ['hall' => $hall, 'request' => $request, 'hallAvailability' => $hallAvailability]);
    }

    function checkHallAvailability($hall, $date, $start_time, $end_time)
    {
        $bookings = $hall->bookings; // Get the bookings for the hall
        return $this->checkBooking($bookings, $date, $start_time, $end_time); // Check if the hall is available

    }
}
