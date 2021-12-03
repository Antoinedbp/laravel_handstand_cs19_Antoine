@extends('template.welcome')

@section('content')
    @if (session()->has('errors'))
    <div class="alert alert-danger">
        <ul>
            {{session('errors')}}
        </ul>
    </div>
    @endif
    @include('partials.slider')
    @include('partials.about')
    @include('partials.classes')
    @include('partials.schedule')
    @include('partials.trainers')
    @include('partials.gallery')
    @include('partials.events')
    @include('partials.pricings')
    @include('partials.clients')
    @include('partials.map')
    @include('partials.newsletter')
@endsection