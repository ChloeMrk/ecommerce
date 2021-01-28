<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    // protected $fillable permet à Laravel d'acceter d'envoyer les données à notre base de donné

    protected $fillable = ['name','prix','url_image','description'];
}
