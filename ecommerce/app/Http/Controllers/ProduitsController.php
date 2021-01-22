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
        
       $produits = Produit::create([

            'name' => request('name'),
            'prix' => request('prix'),
            'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath()


       ]);
    }

    public function shoow(){

        $produits= Produit::all();
        return view('Produit/produit',[
            'produits'=>$produits,
        ]);
    }
}
