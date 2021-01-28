@extends('layout')

@section('contenu')

<body>

    
   
    <div class="produit">

    @foreach($produits as $produit)

        <div class="post-container">
            <a href="{{route('showProduit',['id'=>$produit->id])}}">
                <h4>{{$produit->name}}</h4>
                <div class="test"><img src="{{$produit->url_image}}" alt="produitImage"></div></a>
                <span>{{$produit->prix}} €</span>
                <p>{{$produit->description}}</p>
        </div>  

        @endforeach
    </div>
    
   

   
 

   <div class="d-flex justify-content-center">
    {!! $produits->links('') !!}
    </div>
</body>





@endsection