@extends('layout')

@section('contenu')

<!-- Récupérer les données pour les envoyer dans la table produit -->
<form action="/produit"   method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <input type="string" name="name" placeholder="Name" value={{old('name')}}>
    <input type="number" name="prix" placeholder="Prix">
   
    <input type="file" class="" id="inputFile" name="file">
    <input type="text" name="description" placeholder="description">
    <input type="submit" value="Valider">





</form>

@endsection


 







