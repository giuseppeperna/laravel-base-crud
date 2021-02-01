<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Http\Requests\BookingFormRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookingFormRequest $request)
    {   
        $valid = $request->validated();

        $newBooking = new Booking();
        $newBooking->guest_full_name = $valid['guest_full_name'];
        $newBooking->guest_credit_card = $valid['guest_credit_card'];
        $newBooking->room = $valid['room'];
        $newBooking->from_date = $valid['from_date'];
        $newBooking->to_date = $valid['to_date'];
        $newBooking->more_details = $valid['more_details'];

        $newBooking->save();
        return redirect()->route('bookings.show', $newBooking);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking = Booking::find($id);
        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
        $valid = $request->validated();

        $oldBooking = Booking::find($id);
        $oldBooking->guest_full_name = $valid['guest_full_name'];
        $oldBooking->guest_credit_card = $valid['guest_credit_card'];
        $oldBooking->room = $valid['room'];
        $oldBooking->from_date = $valid['from_date'];
        $oldBooking->to_date = $valid['to_date'];
        $oldBooking->more_details = $valid['more_details'];

        $oldBooking->save();

        return redirect()->route('bookings.index');
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
