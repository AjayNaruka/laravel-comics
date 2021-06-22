@extends('layouts.template')

@section('content')
<main class="comics main-cards">
  
  <h1>COMICS</h1>
  <div class="cards-container">
    @foreach ($fumetti as $fumetto )
      
    
    <div class="card">
      <div class="card-content">
        <img src="{{$fumetto['thumb']}}" alt="">
      <h4>{{$fumetto['title']}}</h4>
      <h4>{{$fumetto['sale_date']}}</h4>
      </div>
      <div class="card-overlay">
        <p>
          {{$fumetto['description']}}
        </p>
      </div>
    </div>
    @endforeach
    

  </div>


  {{-- MENU --}}
 {{--  @php
      $descriptions =[];
      $active_desc =1;
  @endphp
  <div class="container clearfix">
    <div class="main-left">
      <ul>
        @foreach ($fumetti as $fumetto )
          <li>{{$fumetto['title']}}</li>
          @php
              $desciptions[] = $fumetto['description']
          @endphp
        @endforeach
      </ul>
    </div>
    <div class="main-right">
      <p>{{$desciptions[$active_desc]}}</p>
    </div>
     
  </div> --}}
  
    
</main>
@endsection