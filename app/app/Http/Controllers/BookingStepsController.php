<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookingsteps;
use Illuminate\Database\Eloquent\Model;


class BookingStepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $bookings = bookingsteps::all();
        return view('booking', compact('bookings'))->with(request());
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
        
        //
        $bookings = new bookingsteps;
        $bookings->checkinDate = $request->input('checkinDate');
        $bookings->checkoutDate = $request->input('checkoutDate');
        $bookings->numAdults = $request->input('numAdults');
        $bookings->numChildren = $request->input('numChildren');
        $bookings->numRooms = $request->input('numRooms');

        $bookings->save();

        return redirect('booking')->with('Success', 'Data Saved');


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
}
