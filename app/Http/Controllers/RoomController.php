<?php

namespace App\Http\Controllers;
use App\Room;
use DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
     public function index()
    {
        $rooms = Room::all();
        $available_room = DB::table('rooms')
                            ->select('roomnumber')
                            ->where('start_date', '<=', '2018-10-17')
                            ->get();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $room = new Room();
        $room_numbers = array();

        for($i = 1; $i<= 350; $i++){
            if($i >= 101 && $i <= 120){
                $room_numbers[$i] = $i;
            }
            else if($i >= 201 && $i <= 220){
                $room_numbers[$i] = $i;
            }
            else if($i >= 301 && $i <= 320){
                $room_numbers[$i] = $i;
            }

        }
        return view('rooms.create', compact('room', 'room_numbers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'typeofroom' => 'required',
            'roomnumber' => 'required'
            
        ]);
        if(isset($request->group)){
            if($request->group =='Family' || $request->group =='Group'){
                $request->validate([
                    'start_date'=>'required',
                    'end_date'=>'required'
                ]);
            }
          
        }
        Room::create($request->all());

        $request->session()->flash('msg', 'Room has been created');

        return redirect('/rooms');
    }

    public function show(Room $room)
    {
        $room = Room::find($room->id);
        return view('rooms.detail', compact('room'));
    }

    public function edit(Room $room)
    {
        $room = Room::find($room->id);
        $room_numbers = array();
        for($i = 1; $i<= 350; $i++){
            if($i >= 101 && $i <= 110){
                $room_numbers[$i] = $i;
            }
            else if($i >= 201 && $i <= 210){
                $room_numbers[$i] = $i;
            }
            else if($i >= 301 && $i <= 310){
                $room_numbers[$i] = $i;
            }
        }
        return view('rooms.edit', compact('room', 'room_numbers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'categoryname' => 'required',
            'gender' => 'required',
            'group' => 'required',
            'typeofroom' => 'required',
            'roomnumber' => 'required'
        ]);
        if(isset($request->group)){
            if($request->group =='Family'){
                $request->validate([
                    'start_date'=>'required',
                    'end_date'=>'required'
                ]);
            }
            else if($request->group =='Group'){
                $request->validate([
                    'start_date'=>'required',
                    'end_date'=>'required'
                ]);
            }
        }
        
        $room = Room::find($id);
        $room->update($request->all());
        $request->session()->flash('msg', 'Room has been updated');
        return redirect('/rooms');
    }

    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        request()->session()->flash('msg', 'Room has been deleted');
        return redirect('rooms');
    }
}
