@extends('layouts.home')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col s12 m4">
      <img src="{{ $recipe->afbeelding }}" class="image">
      <h5>{{ $recipe->naam }}</h5>
      <ul class="collection">
      	<li class="collection-item"><b>Ingredienten:</b></li>
        @foreach($ingredients as $ingredient)
      		<li class="collection-item">{{ $ingredient['amount'] }} {{ $ingredient['ingredient'] }}</li>
    	@endforeach
     	 
      </ul>

    </div>
    <div class="col s12 m8">
    @foreach($steps as $key => $value)
        @php $newKey = $key + 1;  @endphp
          <div class="card-panel">
          	 <h5 style="display:inline-block;">{{ $newKey }}</h5>
       		 <p>{{ $value }}</p>
          </div>
        @endforeach
      {{-- <div class="card-panel">
        <h5 style="display:inline-block;">1</h5>
        <p>Breng een pan met 1 liter water aan de kook. Verkruimel er 1 groentebouillontabblet boven</p>
      </div>
      <div class="card-panel">
        <h6>2</h6>
        <p>Doe iets anders dat ook weer in een pan moet al zal ik niet weten wat er nou eigenlijk in de pan moet gaan</p>
      </div>
      <div class="card-panel">
        <h6>3</h6>
      </div>
      <div class="card-panel">
        <h6>4</h6>
      </div> --}}

    </div>
  </div>
</div>

@endsection