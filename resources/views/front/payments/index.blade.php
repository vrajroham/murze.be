@extends('front.layouts.master')

@section('title', 'Payments')

@section('content')
    <h1>Make a payment to murze.be</h1>

    @if (! session()->has('amount'))
        @include('front.payments.partials.chooseAmount')
    @else
        @include('front.payments.partials.stripePayment')
    @endif
@endsection