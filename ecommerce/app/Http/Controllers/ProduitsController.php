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
        
       $produit = Produit::create([

            'name' => request('name'),
            'prix' => request('prix'),
            'url_image' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath()


       ]);
    }

    public function shoow(){
        return view('Produit/produit');
    }
}
