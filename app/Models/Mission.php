<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        "label",
        "vehicule_id",
        "demande_id",
        "livreur_id"
    ];

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
    public function livreur(){
        return $this->belongsTo(User::class);
    }
}
