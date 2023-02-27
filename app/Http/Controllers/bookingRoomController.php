<?php

namespace App\Http\Controllers;

use App\Models\BookingRoom;
use Illuminate\Http\Request;

class bookingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookingRoom = bookingRoom::all();
        return $bookingRoom;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookingRoom = new bookingRoom();
        $bookingRoom->order_name = $request->input("order_name");
        $bookingRoom->departement = $request->input("departement");
        $bookingRoom->loan_date = $request->input("loan_date");
        $bookingRoom->necessity = $request->input("necessity");
        $bookingRoom->room_name = $request->input("room_name");
        $bookingRoom->time_start = $request->input("time_start");
        $bookingRoom->time_end = $request->input("time_end");
        $bookingRoom->number_of_people = $request->input("number_of_people");
        $bookingRoom->information = $request->input("information");
        $bookingRoom->save();

        return response()->json([
            'succes' => 201,
            'message' => 'Data berhasil disimpan',
            'data' => $bookingRoom
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookingRoom =bookingRoom::find($id);
        if($bookingRoom){
            return response()->json([
                'status' => 200,
                'data' => $bookingRoom
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'id atas' . $id . 'tidak di temukan'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingRoom $bookingRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookingRoom = bookingRoom::find($id);
        if($bookingRoom){
            $bookingRoom->order_name = $request->order_name ? $request->order_name : $bookingRoom->$request->order_name;
            $bookingRoom->departement = $request->departement ? $request->departement :$bookingRoom->$request->departement;
            $bookingRoom->loan_date = $request->loan_date ? $request->loan_date :$bookingRoom->$request->loan_date;
            $bookingRoom->necessity = $request->necessity ? $request->necessity :$bookingRoom->$request->necessity;
            $bookingRoom->room_name = $request->room_name ? $request->room_name :$bookingRoom->$request->room_name;
            $bookingRoom->time_start = $request->time_start ? $request->time_start :$bookingRoom->$request->time_start;
            $bookingRoom->time_end = $request->time_end ? $request->time_end :$bookingRoom->$request->time_end;
            $bookingRoom->number_of_people = $request->number_of_people ? $request->number_of_people :$bookingRoom->$request->number_of_people;
            $bookingRoom->information = $request->information ? $request->information :$bookingRoom->$request->information;
            $bookingRoom->save();
            return response()->json([
                'status' => 200,
                'data' => $bookingRoom
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message' => $id . 'tidak di temukan'
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingRoom  $bookingRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookingRoom = bookingRoom::where('id', $id)->first();
        if($bookingRoom){
            $bookingRoom->delete();
            return response()->json([
                'status' => 200,
                'data' => $bookingRoom
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'message'=> 'id' . $id . 'tidak ditemukan'
            ],404);
        }
    }
}
