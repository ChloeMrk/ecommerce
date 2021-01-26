<p>Hello</p>

<form action="{{route('produit.search')}}" class="d-flex mr-3">
{{csrf_field()}}
 
    <div class="form-group mb-0 mr-1">
         <input type="text" name="search" class="form-control">   
    </div>
    <button type="submit" class="btn btn-info">Rechercher</button>

</form>

