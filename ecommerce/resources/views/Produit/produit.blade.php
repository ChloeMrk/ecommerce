@extends('layout')

@section('contenu')

<ul>

    <li>
    
        @foreach($produits as $produit)

        
                <h4>{{$produit->name}}</h4>
                <p>{{$produit->prix}} €</p>
                <div><img src="{{$produit->url_image}}" alt="produitImage"></div>

        @endforeach
    
    
    </li>

</ul>

@endsection