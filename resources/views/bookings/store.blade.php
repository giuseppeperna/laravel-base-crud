@extends('layouts.app')

@section('main')
<div class="record-success">
    <h3>Il nuovo record è stato inserito correttamente!</h3>
</div>
<div class="cta-homepage">
    <a href="/">Homepage</a>
</div>
<div class="cta-homepage">
    <a href="{{ route('bookings.index')}}">Lista Clienti</a>
</div>
@endsection