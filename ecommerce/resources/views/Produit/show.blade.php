@extends('layout')

@section('contenu')

<h3>{{$name}}</h3>

<div><img src="{{$url_image}}" alt="produitImage"></div>

<div><p>{{$description}}</p></div>

@endsection