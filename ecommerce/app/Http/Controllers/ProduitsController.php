<?php

namespace App\Http\Controllers;

use App\Models\Produit as Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function show(){
        return view('Produit/produits');
    }

    public function produit(){

        
        // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée 
       
       $produits = Produit::create([

            'name' => request('name'),
            'prix' => request('prix'),
            'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath()
 

       ]);
    }

    public function shoow(){

        // $produits= Produit::all();
        $produits = Produit::simplePaginate(2);
        return view('Produit/produit',[
            'produits'=>$produits,
            
        ]);
    }

    public function recherche()
    {
        $search = request()->input('search');

        $produits = Produit::where('name','like',"%$search%")
            ->orWhere('description','like',"%$search%")
            ->paginate(2);

        return view('produit.search')->with('produits',$produits);

    }
}
