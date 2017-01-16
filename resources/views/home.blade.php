@extends('layouts.custom')

@section('content')
  <br><br>
  <div class="container">
  @foreach($all as $recipe)
  <div class="col-md-3">
    <img src="{{ $recipe->afbeelding }}" alt="recipe image" class="img-responsive">
    <h2>{{ $recipe->naam }}</h2>
    <p class="recipe-description">{{ $recipe->beschrijving }}</p>
    <p class="tag"></p>
    <a href="/recipe/{{ $recipe->id }}"><button class="recipe-button">Bekijk recept</button></a>
  </div>
  @endforeach
  </div>
    {{-- <div class="col-md-3">
      <img src="https://images.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn.pizzamatch.com%2F1%2F10%2F1366721821-margherita-630.JPG&f=1" class="img-responsive">
      <h2>Pizza margherita</h2>
      <p class="recipe-description">
        Umami meh authentic, beard listicle gochujang vegan. Mixtape vaporware pork belly letterpress, bespoke viral prism kale chips man braid heirloom kickstarter. Single-origin coffee semiotics banjo seitan marfa cardigan fanny pack, intelligentsia cray subway tile tbh migas craft beer.
      </p>
      <p class="tag"><span>Vegetarisch</span><span class="right">Italiaans</span></p>

      <a href="/recipe"><button class="recipe-button">Bekijk recept</button></a>
    </div> --}}


@endsection
