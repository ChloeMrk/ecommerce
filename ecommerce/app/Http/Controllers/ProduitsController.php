<?php

namespace App\Http\Controllers;

use App\Models\Produit as Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function creation(){
        return view('Produit/produits');
    }

    public function produit(){

        
        // Stocke l'image sur Cloudinary et renvoie l'URL sécurisée 
       
       $produits = Produit::create([

            'name' => request('name'),
            'prix' => request('prix'),
            'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
            'description'=>request('description')
 

       ]);
    }

    public function catalogue(){

        // $produits= Produit::all();
        //$produits = Produit::simplePaginate(2);

        

        $produits = Produit::orderBy('created_at','desc')
            ->simplepaginate(2);
       
        return view('Produit/produit',[
            'produits'=>$produits,
            
        ]);
    }

    public function homepage(){

         //$produits= Produit::all();
        //$produits = Produit::simplePaginate(2);

        

        $produits = Produit::orderBy('created_at','desc')
            ->simplepaginate(2);
       
        return view('homepage',[
            'produits'=>$produits,
            
        ]);
    }

    public function show(int $id){
        $produits = Produit::all()->where('id',$id)->first();
        return view('Produit/show',['name'=>$produits->name,'description'=>$produits->description,'url_image'=>$produits->url_image]);

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
