@extends('layouts.home')

@section('content')
  <br>
<div class="container m12">
  <h4>Popular Recipes</h4>
  <br>
  @php $count = 0; @endphp
  <div class="row">
   @foreach($all as $single)
    <div class="col s12 m4">
      <div class="card medium">
        <div class="card-image">
          <img src="{{ $single['afbeelding'] }}" alt="">
          <span class="card-title">{{ $single['naam'] }}</span>
        </div>
        <div class="card-content">
          {{-- <div class="chip">Made by mom</div> --}}
          <div class="style" style="margin-top:10px;"></div>
           <p>{{ $single['beschrijving'] }}</p>
           <br>
           
        </div>
        <div class="card-action">
           <a class="green darken-1 btn" href="/recipe/{{ $single['id'] }}">Bekijk recept</a>
        </div>
      </div>
    </div>
    @php $count++ @endphp
    @if($count % 4 == 0)
      </div>
      <div class="row">
    @endif
  @endforeach
  </div>
</div>
@endsection