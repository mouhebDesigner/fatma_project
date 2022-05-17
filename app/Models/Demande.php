<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        "article",
        "destination",
        "date",
        "nom_client",
        "num_client",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
