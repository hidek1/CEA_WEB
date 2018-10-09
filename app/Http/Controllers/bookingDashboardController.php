<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;

class bookingDashboardController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index()
    {
        //$client = new Client();
        $room = new Room();
        //$booking  = new Booking();
        return view('bookingdashboard', compact('room'));
    }

    public function create()
    {
        //
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
