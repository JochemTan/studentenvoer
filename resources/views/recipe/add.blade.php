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
<script src="/js/main.js"></script>
@endsection