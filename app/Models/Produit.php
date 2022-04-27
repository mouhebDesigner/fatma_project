<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "quantity",
        "price",
        "categorie_id",
        "user_id"
    ];

    public function ressources(){
        return $this->hasMany(Ressource::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
