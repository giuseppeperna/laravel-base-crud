@extends('layouts.app')

@section('main')
<div class="cta-homepage">
    <a href="/">Homepage</a>
</div>
<form method="POST" action="{{ route('bookings.update', $booking['id'])}} ">
    <div class="form-group container-form">
        @csrf
        @method('put')

        <label for="guest_name">Guest full name</label>
        <input type="text" name="guest_full_name" class="form-control" id="guest_name" placeholder="Full name" 
        value="{{ $booking['guest_full_name'] }}">
        @error('guest_full_name')
            <p>{{ $message }}</p>
        @enderror

        <label for="guest_credit_card">Credit Card</label>
        <input type="text" name="guest_credit_card" class="form-control" id="guest_credit_card" placeholder="Credit Card"
        value="{{ $booking['guest_credit_card']}}">
        @error('guest_credit_card')
            <p>{{ $message }}</p>
        @enderror

        <label for="guest_room">Room</label>
        <input type="text" name="room" class="form-control" id="guest_room" placeholder="Room"
        value="{{ $booking['room']}}">
        @error('room')
            <p>{{ $message }}</p>
        @enderror

        <label for="guest_check_in">Check-in</label>
        <input type="text" name="from_date" class="form-control" id="guest_check_in" placeholder="Check-in"
        value="{{ $booking['from_date']}}">
        @error('from_date')
            <p>{{ $message }}</p>
        @enderror

        <label for="guest_check_out">Check-out</label>
        <input type="text" name="to_date" class="form-control" id="guest_check_out" placeholder="Check-out"
        value="{{ $booking['to_date']}}">
        @error('to_date')
            <p>{{ $message }}</p>
        @enderror

        <label for="guest_details">More Details</label>
        <textarea type="text" name="more_details" class="form-control" id="guest_details" placeholder="More details">{{ $booking['more_details']}}</textarea>
        @error('more_details')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>
@endsection