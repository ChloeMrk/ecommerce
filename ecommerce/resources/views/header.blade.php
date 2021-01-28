

@if(auth()->check())
    <!-- Utilisateur connecté -->
    <!-- //sign_out -->

    <!-- Donne nom à une route ou directement avec un url-->
    <nav class="navbar navbar-light ">
       
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="https://cdn1.iconfinder.com/data/icons/space-164/64/planet8-world-fantasy-science-512.png" width="30" height="30" alt="">
        </a>
        <h1>World Of Gamecraft</h1>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a style="text-decoration:none" href="{{url('/signout')}}">Sign out</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/password_modification')}}" style="text-decoration:none">Change Password</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/produits')}}" style="text-decoration:none">Catalogue</a>
            </li>
            </li>
                <li class="nav-item">
                <a class="text-muted" href="{{route('cart.index')}}" style="text-decoration:none">Panier </a>
            <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span>
            </li>
        </ul>
            <ul class="nav justify-content-end">
            <li class="nav-item">

                <form action="{{route('produit.search')}}" class="d-flex mr-3">
                {{csrf_field()}}
            
                    <div class="form-group mb-0 mr-1">
                        <input type="text" name="search" class="form-control">   
                    </div>
                <button type="submit" class="btn btn-info">Rechercher</button>
                </form>
            </li>
        </ul>
    </nav>

@else
<nav class="navbar navbar-light ">
    
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="https://cdn1.iconfinder.com/data/icons/space-164/64/planet8-world-fantasy-science-512.png" width="30" height="30" alt="">
    </a>
    <h1>World Of Gamecraft</h1>
   


    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a href="{{url('/connexion')}}" style="text-decoration:none">Log In</a>
        </li>
        <li class="nav-item">
            <a href="{{url('/inscription')}}" style="text-decoration:none">Sign in</a>
        </li>
        <li class="nav-item">
                <a href="{{url('/produits')}}" style="text-decoration:none">Catalogue</a>
        </li>
            <li class="nav-item">
            <a class="text-muted" href="{{route('cart.index')}}">Panier </a>
        <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span>
        </li>
    </ul>

        <ul class="nav justify-content-end">
        <li class="nav-item">

            <form action="{{route('produit.search')}}" class="d-flex mr-3">
            {{csrf_field()}}
        
                <div class="form-group mb-0 mr-1">
                    <input type="text" name="search" class="form-control">   
                </div>
            <button type="submit" class="btn btn-info">Rechercher</button>
            </form>
        </li>
    </ul>
</nav>
    
        
        
        
    @endif
    <!-- login et inscription -->





