@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        {{-- Pilot <-N----M-> Car <-N----1-> Brand --}}
        <h1>
          {{$pilot -> name}}
          {{$pilot -> lastname}}:
        </h1>
        <ul>
          @foreach ($pilot -> cars as $car)
            <li>
              <h3>Car:</h3>
              <h4>Id -->{{$car -> id}}</h4>
              <h4>Name -->{{$car -> name}}</h4>
              <h4>Model -->{{$car -> model}}</h4>
              <h4>Kw-->{{$car -> kw}}</h4>

              <h3>Brand</h3>
              <h4>Id -->{{$car -> brand -> id}}</h4>
              <h4>Name -->{{$car -> brand -> name }}</h4>
              <h4>Nationality -->{{$car -> brand -> nationality}}</h4>
              <br>
              <br>
              <br>
            </li>

          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
