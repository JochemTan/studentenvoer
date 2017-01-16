@extends('layouts.custom')

@section('content')
<br><br>

<div class="row">
  <div class="col-md-3">
    <img src="{{ $recipe->afbeelding }}" class="img-responsive"/>
    <h2>{{ $recipe->naam }}</h2>
    <p class="needings">Ingredienten</p>
    <ul class="list">
    @foreach($ingredients as $ingredient)
      <li>{{ $ingredient['amount'] }} {{ $ingredient['ingredient'] }}</li>
    @endforeach
    </ul>
    {{-- <div class="icon"><i class="ion-ios-heart-outline custom-icon"></i></div> --}}
    <p class="tag"><span>Vegetarisch</span><span class="right">Italiaans</span></p>
  </div>

  <div class="col-md-9">
    <div class="content">
        @foreach($steps as $key => $value)
        @php $newKey = $key + 1;  @endphp
          <div class="row">
            <div class="col-md-1">
              <div class="step-size">{{ $newKey }}</div>
            </div>
            <div class="col-md-4">
              <div class="step">{{ $value }}</div>
            </div>
          </div>
        @endforeach
      <br>
    </div>
  </div>
</div>
@endsection
