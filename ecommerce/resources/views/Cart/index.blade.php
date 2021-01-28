@extends('layout')

@section('contenu')

<div class="col-md-12">
    <h1>Mon panier</h1>
</div>
    @if (Cart::count() > 0)
        <div class="px-4 px-lg-0">
    <div class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                        <!-- Shopping cart table -->
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Produit</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Prix</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantité</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Supprimer</div>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Cart::content() as $produit)
                                <tr>
                                    <th scope="row" class="border-0">
                                        <div class="p-2">
                                            <img src="{{ $produit->model->url_image }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                                            <div class="ml-3 d-inline-block align-middle">
                                                <h5 class="mb-0"> <a href="" class="text-dark d-inline-block align-middle">{{ $produit->model->name }}</a></h5>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="border-0 align-middle"><strong>{{ $produit->model->prix }}</strong></td>
                                    <td class="border-0 align-middle"><strong>1</strong></td>
                                    <td class="border-0 align-middle">

                                    <form action="route{{'cast.destroy',$produit->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>

                @else
                    <p>Panier est vide</p>
                @endif

@endsection