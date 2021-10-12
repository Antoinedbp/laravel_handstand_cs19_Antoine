@extends('template.welcome')

@section('content')
    @include('partials.slider')
    @include('partials.about')
    @include('partials.classes')
    @include('partials.schedule')
    @include('partials.trainers')
    @include('partials.gallery')
    @include('partials.events')
    @include('partials.pricings')
    @include('partials.clients')
    @include('partials.newsletter')
@endsection