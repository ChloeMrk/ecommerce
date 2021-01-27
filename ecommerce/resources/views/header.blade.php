
@if(auth()->check())
    <!-- Utilisateur connecté -->
    <!-- //sign_out -->

    <!-- Donne nom à une route ou directement avec un url-->
    <a href="{{url('/signout')}}">Sign out</a>
    <a href="{{url('/password_modification')}}">Change Password</a>

@else
    <a href="{{url('/connexion')}}">log in</a>
    <a href="{{url('/inscription')}}">Sign in</a>
    
@endif
<!-- login et inscription -->

<form action="{{route('produit.search')}}" class="d-flex mr-3">
{{csrf_field()}}
 
    <div class="form-group mb-0 mr-1">
         <input type="text" name="search" class="form-control">   
    </div>
    <button type="submit" class="btn btn-info">Rechercher</button>

</form>

