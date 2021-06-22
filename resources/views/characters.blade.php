@extends('layouts.template')

@section('content')
<main class="main-cards">
  <h1>CHARACTERS</h1>

  <div class="cards-container">
    @for ($i=0;$i<count($personaggi);$i++)
    <div class="card">
      <div class="card-content">
        <img src={{$personaggi[$i]['image']['url'] }} alt="immagine non dispo">
      <h4>Name: {{ $personaggi[$i]['name'] }}</h4>
      <h4>Race: {{ $personaggi[$i]['appearance']['race'] }}</h4>
      <h4>First Appearance: {{ $personaggi[$i]['biography']['first-appearance'] }}</h4>
      </div>
    </div>
    @endfor
    
  </div>
  
</main>
@endsection