@extends('layouts.app')

@section('main')
<div class="cta-homepage">
    <a href="/">Homepage</a>
</div>
<div class="bookings-container container">
    @foreach ($bookings as $booking)
    <div class="booking">
        <h3>NAME: {{ $booking->guest_full_name }}</h3>
        <span class="room">ROOM: {{ $booking->room }}</span>
        <a href="{{ route('bookings.show', $booking->id) }}">More details</a>
        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
    </div>
    @endforeach
</div>
@endsection