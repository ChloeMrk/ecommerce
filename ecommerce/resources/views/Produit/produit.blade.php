@extends('layout')

@section('contenu')

<ul>

    <li>
    
        @foreach($produits as $produit)

            <div>
            <a href="{{route('showProduit',['id'=>$produit->id])}}">
                <h4>{{$produit->name}}</h4>
                <p>{{$produit->prix}} €</p>
                <div><img src="{{$produit->url_image}}" alt="produitImage"></div></a>
                <form action="" method="post">
                {{ csrf_field() }}

                <input type="number" name="quantity" placeholder="Quantité" class="form-control mr-2">
                <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form>
            </div>  

        @endforeach
    
    
    </li>
    <div class="d-flex justify-content-center">
    {!! $produits->links('') !!}
    </div>

   
</ul>



@endsection