@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
       {{-- Pilot <-N----M-> Car <-N----1-> Brand --}}
       <ul>
         @foreach ($cars as  $car)
           <li>
             <h1>Car:</h1>
             <h4>Id -->{{$car -> id}}</h4>
             <h4>Name -->{{$car -> name}}</h4>
             <h4>Model -->{{$car -> model}}</h4>
             <h4>Kw-->{{$car -> kw}}</h4>

             <h3>Brand</h3>
             <h4>Id -->{{$car -> brand -> id}}</h4>
             <h4>Name -->{{$car -> brand -> name }}</h4>
             <h4>Nationality -->{{$car -> brand -> nationality}}</h4>
             <h3>Pilots:</h3>
             @foreach ($car -> pilots as $pilot)
               <h4>
                 <a href="{{route('pilot', $pilot -> id)}}">
                   {{$pilot -> name}}
                   {{$pilot -> lastname}}
                 </a>
                 {{$pilot -> nationality}}
                 {{$pilot -> date_of_birth}}
               </h4>
             @endforeach
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
