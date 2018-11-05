<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;
use App\Client;
use DB;
class ClientsController extends Controller
{
   	public function index()
    {
        // Find All clients and passing to clients
        $clients = Client::all();
        // Redirect to Clients page
        return view('clients.index', compact('clients'));
    }



    public function create()
    {
        // Instance of Client
        $client = new Client();
        $categoryst = array('Individual','Family','Groups');
        $category =array();
        foreach($categoryst as $key => $country) {
            $category[$country]=$country;
        }
        $typeofrooms = array('Single', 'Double','Triple','Quad','Fifth','Six');
        $roomtype = array();
        foreach($typeofrooms as $key => $room){
            $roomtype[$room] = $room;
        }
        $booking = Booking::all();
        $available = DB::select("SELECT r.id AS roomID, r.roomnumber as typeroom FROM rooms AS r LEFT JOIN 
        ( SELECT room_id FROM bookings WHERE `start_date` < '2018-10-31' AND `end_date` > '2018-11-01' GROUP BY room_id ) AS t 
        ON r.id = t.room_id");
        return view('clients.create', compact('client','category', 'roomtype', 'available'));
        
    }

    public function store(Request $request)
    {
        // Validate the form
        $request->validate([
            'name' => 'required',
            'typeofroom' =>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'categoryst'=>'required',
            'course'=>'required',
            'check_in'=>'required',
            'check_out'=>'required'
        ]);

        // Store into Database
        Client::create([
            'name' => $request->name,
            'user_id'=>$request->user_id,
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'categoryofstudents'=>$request->categoryst,
            'course'=>$request->course,
            'typeofroom'=>$request->typeofroom,
            'checkin'=>$request->check_in,
            'checkout'=>$request->check_out,
            'reserveroom'=>$request->reserveroom
        ]);

        // Stored a Message in session
        $request->session()->flash('msg', 'Client has been added');

        // Redirect back to Clients
        return redirect('/clients');
    }

    public function show($id)
    {
        // Find the client
        $client = Client::find($id);

        // Get a specific booking
        $bookings = Booking::where('client_id', $id)->get()->all();

        // Return back to client details
        return view('clients.detail', compact('client', 'bookings'));
    }

    public function edit($id)
    {
        // Find the client
        $client = Client::find($id);
        
        // Redirect to Edit client
        $categoryst = array('Individual','Family','Groups');
        $category =array();
            foreach($categoryst as $key => $country) {
                $category[$country]=$country;
            }
        $typeofrooms = array('Single', 'Double','Triple','Quad','Fifth','Six');
        $roomtype = array();
            foreach($typeofrooms as $key => $room){
                $roomtype[$room] = $room;
            }
        return view('clients.edit', compact('client','category', 'roomtype'));
    }

    public function update(Request $request, $id)
    {
        // Find the client
        $client = Client::find($id);

        // Validate the form
        $request->validate([
            'name' => 'required',
            'typeofroom' =>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'categoryst'=>'required',
            'course'=>'required',
            'check_in'=>'required',
            'check_out'=>'required'
        ]);

        // Check if there is any image,
       

        // Updating Clients
        $client->update([
            'name' => $request->name,
            'user_id'=>$request->user_id,
            'gender'=>$request->gender,
            'birthday'=>$request->birthday,
            'categoryofstudents'=>$request->categoryst,
            'course'=>$request->course,
            'typeofroom'=>$request->typeofroom,
            'checkin'=>$request->check_in,
            'checkout'=>$request->check_out
        ]);

        // Store a message in session
        request()->session()->flash('msg', 'Client has been updated');

        // Redirect to Clients
        return redirect('clients');
    }

    public function destroy($id)
    {
        // Find the client
        Client::destroy($id);

        // Store a message n session
        request()->session()->flash('msg', 'Client has been deleted');

        // Redirect back to Clients
        return redirect('clients');
    }
}
