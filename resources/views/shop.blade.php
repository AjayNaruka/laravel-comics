@extends('layouts.template')

@section('content')
<main class="main-cards">
  
  <h1>COMICS</h1>
  <div class="cards-container">
    @foreach ($fumetti as $fumetto )
      
    
    <div class="card">
      <div class="top">
        <img src="{{$fumetto['thumb']}}" alt="">
      <h4>{{$fumetto['title']}}</h4>
      </div>
      <h2>>> {{$fumetto['price']}} <<</h2>
    </div>
    @endforeach
    

  </div>
   
    
</main>
@endsection