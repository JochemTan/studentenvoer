@extends('layouts.home')
@section('css')
{{-- <link rel="stylesheet" href="/css/recipe.css"> --}}
@endsection
@section('content')
<br><br>
	<div class="row">
	<form action="/recept/edit/{{ $recept->id }}" method="post">	

				{{ csrf_field() }}
	<div class="container">
		<div class="card-panel">
		<div class="recept">
			<h5>Edit recept</h5>

			<div class="form">
					<input type="text" name="naam" value="{{ $recept->naam }}" placeholder="naam">
					<textarea name="beschrijving" class="extraTextarea materialize-textarea" placeholder="beschrijving" cols="30" rows="10">{{ $recept->beschrijving }}</textarea>
					<input type="text" value="{{ $recept->bereidingstijd }}" name="bereidingstijd" placeholder="bereidingstijd">
					<input type="text" value="{{ $recept->personen }}" name="personen" placeholder="aantal personen">
					<input type="text" value="{{ $recept->afbeelding }}" name="image" placeholder="Voeg een afbeelding url toe">
  					<div class="input-field">
    <select name="keuken">
     {{--  <option value="0" disabled selected>Kies een keuken</option> --}}
      @foreach($keuken as $tag)

		<option value="{{ $tag->id }}"
		@if($tag->id == $recept->keuken_id)
		selected
		@endif
		>{{ $tag->naam }}</option>
      @endforeach
      {{-- <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option> --}}
    </select>
    <label>Materialize Select</label>
  </div>
        
			</div>
		</div>
		</div>
	
		<div class="card-panel">
			<h5>Ingrediënten</h5>
				<div class="control-group" id="inputs">
					<input type="text" placeholder="voeg ingredient toe en druk op enter" class="ingredient">
					@php $array =  json_decode($recept->ingredient,true); @endphp
					@foreach($array as $item)
						<div class="added-input">
							<input class="ingredient-input " type="text" name="ingredient[]" value="{{ $item['ingredient'] }}" placeholder="ingredient" required>
					<input class="amount" type="text" name="amount[]" value="{{ $item['amount'] }}" placeholder="amount"></div>
						
					@endforeach
					</div>
					
		</div>
		<div class="card-panel">
			<div class="inline">
				<h5 class="h5title">Voeg stappen toe</h5>{{-- <button class="btn btn-primary addstep">stap toevoegen</button> --}}
				 <a class="btn-floating btn-large waves-effect waves-light red addstep"><i class="material-icons">add</i></a>
			<br>
			<br>

			@php 
				$stappen = json_decode($recept->stappen,true);
				$count = 1 ;
			@endphp
			
			<div class="steps">
			@foreach($stappen as $stap)

			<div class="row"><div class="col-md-1"><div class="stepnum"><h5 class="stepnumber">{{ $count }}</h5></div></div><div class="col-md-6"><div class="textarea "><textarea class="materialize-textarea" placeholder="Beschrijf de stap" name="step[]" id="{{ $count }}" cols="30" rows="3">{{ $stap }}</textarea></div></div></div>
			@php $count++; @endphp
			@endforeach
			</div>
			</div>
		</div>
			<input type="submit" name="submit" value="Pas recept aan" class="waves-effect green lighten-2 btn">
	</div>
	</div>
	</form>
</div>

@endsection
@section('js')
<script>
     $(document).ready(function() {
    $('select').material_select();
  });
</script>
<script src="/js/main.js"></script>
@endsection