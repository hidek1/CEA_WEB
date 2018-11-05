<?php

namespace App\Http\Controllers;
use App\Room;
use App\Client;
use App\Booking;
use Illuminate\Http\Request;

class bookingDashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
        $client = new Client();
        $room = new Room();
        $booking  = new Booking();
        return view('bookingdashboard', compact('room','client','booking'));
        /*
        $today = Booking::where('start_date', \Carbon\Carbon::today()->format('Y-m-d'))->get();
        if($today != NULL){
            return Booking::where('start_date', \Carbon\Carbon::today()->format('Y-m-d'))->get();
        }
        */

        
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Dashboard $dashboard)
    {
        //
    }

    public function edit(Dashboard $dashboard)
    {
        //
    }

    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
