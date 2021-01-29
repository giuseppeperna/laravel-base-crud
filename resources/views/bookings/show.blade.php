@extends('layouts.app')

@section('main')
<div class="bookings-container container">
    <div class="booking-detail">
        <ul>
            <li><span>NAME: </span>{{ $booking->guest_full_name }}</li>
            <li><span>ROOM: </span>{{ $booking->room }}</li>
            <li><span>CREDIT CARD: </span>{{ $booking->guest_credit_card }}</li>
            <li><span>CHECK-IN: </span>{{ $booking->from_date }}</li>
            <li><span>CHECK-OUT: </span>{{ $booking->to_date }}</li>
            <li><p>DETAILS: </p>{{ $booking->more_details }}</li>
        </ul>
    </div>
</div>
<div class="go-back">
    <a href="{{route('bookings.index')}}">Back</a>
</div>
@endsection