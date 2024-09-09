<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\HallBooking;
use App\Models\HallLocation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class DashboardController extends Controller
{
    private $user, $users, $bookings, $halls;

    public function __construct()
    {
        $this->users = User::all();
        $this->bookings = HallBooking::all();
        $this->halls = Hall::all();
        $this->user = Auth::user();
    }

    public function index(): Response
    {

        return response()->view('dashboard.index', [
            'user' => $this->user,
            'users' => $this->users,
            'bookings' => $this->bookings,
            'halls' => $this->halls
        ]);
    }

    //Dashboard


    //Halls management

    public function halls(): Response
    {
        return response()->view('dashboard.halls.index');
    }

    public function showHall(Hall $hall): Response
    {
        return response()->view('dashboard.halls.show', ['hall' => $hall]);
    }

    public function createHall(): Response
    {
        $locations = HallLocation::all();

        return response()->view('dashboard.halls.create', ['locations' => $locations]);
    }

    public function storeHall(): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'required',
            'hall_number' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'location' => 'required',
        ]);

        Hall::create([
            'name' => $data['name'],
            'hall_number' => $data['hall_number'],
            'description' => $data['description'],
            'capacity' => $data['capacity'],
            'price' => $data['price'],
            'hall_location_id' => $data['location'],
            'user_id' => $this->user->id,
        ]);

        return response()->redirectToRoute('dashboard.halls');
    }

    public function editHall(Hall $hall): Response
    {
        $locations = HallLocation::all();

        return response()->view('dashboard.halls.edit', ['hall' => $hall, 'locations' => $locations]);
    }

    public function updateHall(Hall $hall): RedirectResponse
    {
        $data = request()->validate([
            'name' => 'required',
            'hall_number' => 'required',
            'description' => 'required',
            'capacity' => 'required',
            'price' => 'required',
            'location' => 'required',
        ]);

        $hall->update([
            'name' => $data['name'],
            'hall_number' => $data['hall_number'],
            'description' => $data['description'],
            'capacity' => $data['capacity'],
            'price' => $data['price'],
            'hall_location_id' => $data['location'],
        ]);

        return response()->redirectTo(route('dashboard.halls.show', $hall));
    }

    public function destroyHall(Hall $hall): RedirectResponse
    {
        $hall->delete();

        return response()->redirectToRoute('dashboard.halls');
    }

    //End Halls management


    //Users management
    public function users(): Response
    {
        return response()->view('dashboard.users.index');
    }

    public function showUser(User $user): Response  //This is the show method
    {
        return response()->view('dashboard.users.show', ['user' => $user]);

    }

    public function createUser(): Response
    {
        return response()->view('dashboard.users.create');
    }

    public function storeUser(Request $request): RedirectResponse
    {
        if ($request->password) {
            $request->validate([
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'usertype' => ['required'],
            ]);

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'usertype' => $request->usertype,
            ]);
        } else {

            $request->validate([
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'usertype' => ['required'],
            ]);

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone' => $request->phone,
                'address' => $request->address,
                'email' => $request->email,
                'usertype' => $request->usertype,
            ]);

        }


        return response()->redirectToRoute('dashboard.users');
    }

    public function editUser(User $user): Response
    {
        return response()->view('dashboard.users.edit', ['user' => $user]);
    }

    public function updateUser(User $user): RedirectResponse
    {
        $data = request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'usertype' => ['required'],
        ]);

        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password)']),
            'usertype' => $data['usertype'],
        ]);


        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'usertype' => 'required',
        ]);

        $user->update([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'usertype' => $data['usertype'],
        ]);

        return response()->redirectTo(route('dashboard.users'));
    }

    public function destroyUser(User $user): RedirectResponse
    {
        $user->delete();

        return response()->redirectToRoute('dashboard.users');
    }

    //End Users management

    //Booking management
    public function bookings(): Response
    {
        return response()->view('dashboard.bookings.index');
    }
    //End Booking management
}
