@extends('layouts.home')
@section('content')
<br>
<div class="container">
  <div class="row">
    <div class="col s12 m4">
      <img src="{{ $recipe->afbeelding }}" class="image">
      <h5>{{ $recipe->naam }}</h5>
      @if(!$recipe->keuken_id == 0)
        <div class="chip">{{ $recipe->keuken->naam }}</div>
          <br>
      @endif
    
      <i class="material-icons icon">av_timer</i><p>{{ $recipe->bereidingstijd }}</p>
      <i class="material-icons icon">assignment_ind</i><p>{{ $recipe->personen }} personen</p>
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
  @if($recipe->user_id == Auth::user()->id)
    <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow" href="/recept/edit/{{ $recipe->id }}"><i class="material-icons">mode_edit</i></a></li>
      <li><a class="btn-floating red darken-1" href="#modal1"><i class="material-icons">delete</i></a></li>
    </ul>
  </div>
  @endif
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Verwijder dit recept?</h4>
      <p>Weet je zeker dat je dit gerecht wilt verwijderen</p>
    </div>
    <div class="modal-footer">
      <form method="post" action="/recipe/delete/{{ $recipe->id }}">
        {{ csrf_field() }}
        <button type="submit" class=" modal-action modal-close waves-effect red-text btn-flat">Verwijder</a>
        </button>
      </form>
      <button type="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancel</a>
    </div>
  </div>

@endsection

@section('js')
  <script>
    $(document).ready(function(){
      $('.modal').modal();
      $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();
    });
  </script>
@endsection