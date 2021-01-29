@extends('layouts.app')

@section('main')
<div class="cta-homepage">
    <a href="{{ route('bookings.index')}}">Lista Clienti</a>
</div>
<div class="cta-homepage">
    <a href="{{ route('bookings.create')}}">Inserisci un nuovo record</a>
</div>
@endsection