@extends('layouts.template')

@section('content')
<main class="comics main-cards">
  
  
  {{-- <div class="cards-container">
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
    

  </div> --}}


  {{-- MENU LATERALE --}}
  @php
      $descriptions =[];
      $img_urls =[];
      $active_desc =1;
      $toShow = (empty($_GET['show'])) ? '0' : $_GET['show'];
  @endphp
  <div class="container clearfix">
    <h1>COMICS</h1>
    <div class="main-left">
      <ul>
        @foreach ($fumetti as $fumetto )
          <li class="{{($loop->index==$toShow) ? 'active' : 'null'}}" onclick="window.location.assign('comics?show={{$loop->index}}');">{{$fumetto['title']}}</li>
          @php
              $desciptions[] = $fumetto['description'];
              $img_urls[] = $fumetto['thumb']
          @endphp
        @endforeach
      </ul>
    </div>
    <div class="main-right">
      
      <p>{{$desciptions[$toShow]}}</p>
      <img src="{{$img_urls[$toShow]}}" alt="">
    </div>
     
  </div>
  
    
</main>
@endsection