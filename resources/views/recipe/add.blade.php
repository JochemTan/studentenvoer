@extends('layouts.home')
@section('css')
{{-- <link rel="stylesheet" href="/css/recipe.css"> --}}
@endsection
@section('content')
<br><br>
	<div class="row">
	<form action="/addrecipe" method="post">	

				{{ csrf_field() }}
	<div class="container">
		<div class="card-panel">
		<div class="recept">
			<h5>Voeg hier je recept toe</h5>

			<div class="form">
					<input type="text" name="naam" placeholder="naam">
					<textarea name="beschrijving" class="extraTextarea materialize-textarea" placeholder="beschrijving" cols="30" rows="10"></textarea>
					<input type="text" name="bereidingstijd" placeholder="bereidingstijd">
					<input type="text" name="personen" placeholder="aantal personen">
					<input type="text" name="image" placeholder="Voeg een afbeelding url toe">
  					<div class="input-field">
    <select name="keuken">
      <option value="0" disabled selected>Kies een keuken</option>
      @foreach($keuken as $tag)
		<option value="{{ $tag->id }}">{{ $tag->naam }}</option>
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

				</div>
					
		</div>
		<div class="card-panel">
			<div class="inline">
				<h5 class="h5title">Voeg stappen toe</h5>{{-- <button class="btn btn-primary addstep">stap toevoegen</button> --}}
				 <a class="btn-floating btn-large waves-effect waves-light red addstep"><i class="material-icons">add</i></a>
			<br>
			<br>
			<div class="steps">
			</div>
			</div>
		</div>
			<input type="submit" name="submit" value="Maak recept aan" class="waves-effect green lighten-2 btn">
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