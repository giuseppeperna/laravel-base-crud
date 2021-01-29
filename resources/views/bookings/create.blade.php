@extends('layouts.app')

@section('main')
<div class="cta-homepage">
    <a href="/">Homepage</a>
</div>
<form method="POST" action="{{route('bookings.store')}}">
    <div class="form-group container-form">
        @csrf
        <label for="guest_name">Guest full name</label>
        <input type="text" name="guest_full_name" class="form-control" id="guest_name" placeholder="Full name">
        <label for="guest_credit_card">Credit Card</label>
        <input type="text" name="guest_credit_card" class="form-control" id="guest_credit_card" placeholder="Credit Card">
        <label for="guest_room">Room</label>
        <input type="text" name="room" class="form-control" id="guest_room" placeholder="Room">
        <label for="guest_check_in">Check-in</label>
        <input type="text" name="from_date" class="form-control" id="guest_check_in" placeholder="Check-in">
        <label for="guest_check_out">Check-out</label>
        <input type="text" name="to_date" class="form-control" id="guest_check_out" placeholder="Check-out">
        <label for="guest_details">More Details</label>
        <textarea type="text" name="more_details" class="form-control" id="guest_details" placeholder="More details"></textarea>
    </div>
    <div class="submit-container">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
</form>
@endsection