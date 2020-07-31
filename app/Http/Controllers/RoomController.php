<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use Spatie\QueryBuilder\QueryBuilder;

use Illuminate\Http\UploadedFile;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        // dd($rooms);
        return view('index')->with(['rooms'=>$rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createRoom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room;
        $room->food = $request->food;
        $room->water = $request->water;
        $room->wifi = $request->wifi;
        $room->electricity = $request->electricity;
        $room->room_rent = $request->room_rent;
        $room->distance = $request->distance;
        $room->total_capacity = $request->total_capacity;
        $room->room_capacity = $request->room_capacity;
        $room->total_vacancy = $request->total_vacancy;
        $room->contact = $request->contact;
        $room->address = $request->address;

        if ($request->hasfile('image')) {

            foreach ($request->image as $image) {
                $filename= $image->getClientOriginalName();
                $image->storeAs('images', $filename, 'public');
                $originalNameArray[]= $image->getClientOriginalName();
            }
            $imageStore = implode(" ",$originalNameArray);

        }

        $room->image = $imageStore;
        $room->save();
        
        return redirect('/home/rooms');
    }
   


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function roomDetails($id)
    {
        $room =Room::find($id);
        return view('roomDetails', compact('room'));
    }

    public function search()
    {
            $rooms = QueryBuilder::for(Room::class)
                ->allowedFilters(['address'])
                ->get();
                // dd($place);
        return view('index')->with(['rooms'=>$rooms]);
        
    }

   
}
