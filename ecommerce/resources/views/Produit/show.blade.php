@extends('layout')

@section('contenu')

<div class="show">

    <h3>{{$name}}</h3>

    <div><img src="{{$url_image}}" alt="produitImage"></div>

    <div><p>{{$description}}</p></div>

</div>
@endsection