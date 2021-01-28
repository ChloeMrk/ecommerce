@extends('layout')

@section('contenu')

<ul>

    <li>
    
        @foreach($produits as $produit)

            <div class="catalogue">
                <a href="{{route('showProduit',['id'=>$produit->id])}}" style="text-decoration:none">
                <h4 >{{$produit->name}}</h4>
                <p>{{$produit->prix}} €</p>
            <div><img src="{{$produit->url_image}}" alt="produitImage"></div></a>

            </div> 
                <form action="{{route('cart.store')}}" method="post">
                {{ csrf_field() }}
                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                    <button type="submit" class="btn btn-warning">Ajouter au panier</button>
                </form>
            

        @endforeach
    
    
    </li>
    <div class="d-flex justify-content-center">
    {!! $produits->links('') !!}
    </div>

   
</ul>



@endsection