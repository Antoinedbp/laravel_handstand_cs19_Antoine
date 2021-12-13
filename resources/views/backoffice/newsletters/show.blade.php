@extends('template.back')

@section('contentBO')
<div class="container d-flex align-items-center justify-content-center">
    <div class="card text-center mt-4 w-75">
        <div class="card-header">
          Newsletter
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$newsletter->avis}}</h5>
            <img src="{{$newsletter->signature}}" alt="signature">
            <p class="{{$newsletter->description}}"></p>
            @can('manager')    
                <div class="d-flex justify-content-center">
                    <a href="{{route('newsletters.edit', $newsletter->id)}}" class="btn btn-info">EDIT</a>
                </div>
            @endcan
        </div>
    </div>
</div>
@endsection