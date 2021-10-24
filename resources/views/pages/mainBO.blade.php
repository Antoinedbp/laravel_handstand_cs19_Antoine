@extends('template.back')

@section('contentBO')
  <div style="margin-left: 5rem">
    <h1 class="title_home">HOME BACKOFFICE</h1>
    <div class="globaleHome container " >
      <div class="row " >

        <div class="col-6 skills">
          <h3 class="text-center">Modification NAVBAR</h3>
          <a href="{{route('navbars.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION NAVBAR</button>
          </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification TITRES</h3>
          <a href="{{route('titres.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION TITRES</button>
          </a>
        </div>
        <div class="col-6 contacte">
          <h3 class="text-center">Modification SLIDERS</h3>
          <a href="{{route('sliders.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION SLIDERS</button>
          </a>
        </div>
        <div class="col-6 abouti">
          <h3 class="text-center">Modification ABOUT</h3>
          <a href="{{route('abouts.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION ABOUT</button>
          </a>
        </div>
        <div class="col-6 contacte">
          <h3 class="text-center">Modification CLASSES</h3>
          <a href="{{route('classes.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION CLASSES</button>
          </a>
        </div>
        <div class="col-6 portfolios">
          <h3 class="text-center">Modification SCHEDULE</h3>
          <a href="{{route('schedules.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION SCHEDULE</button>
          </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification TRAINERS</h3>
          <a href="{{route('trainers.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION TRAINERS</button>
          </a>
        </div>
        <div class="col-6 skills">
            <h3 class="text-center">Modification GALLERY</h3>
            <a href="{{route('galleries.index')}}"> 
              <button class="btn btn-danger"type="submit">DIRECTION GALLERY</button>
            </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification EVENTS</h3>
          <a href="{{route('events.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION EVENTS</button>
          </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification PRICINGS</h3>
          <a href="{{route('pricings.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION PRICINGS</button>
          </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification CLIENTS</h3>
          <a href="{{route('clients.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION CLIENTS</button>
          </a>
        </div>
        <div class="col-6 skills">
          <h3 class="text-center">Modification NEWSLETTER</h3>
          <a href="{{route('newsletters.index')}}"> 
            <button class="btn btn-danger"type="submit">DIRECTION NEWSLETTER</button>
          </a>
        </div>
        <div class="col-12 footers">
          <h3 class="text-center">Modification FOOTER</h3>
          <a href="{{route('footers.index')}}">
            <button class="btn btn-danger"type="submit">DIRECTION FOOTER</button>
          </a>
        </div>
      </div>
    </div>
  </div>

@endsection

