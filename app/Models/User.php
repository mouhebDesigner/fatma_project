<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Auth;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "nom",
        "prenom",
        "nom_societe",
        "numtel_societe",
        "categorie_id",
        "email",
        "numtel",
        "adresse",
        "cin",
        "password",
        "role"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return Auth::user()->role == "admin";
    }
    public function isLivreur(){
        return Auth::user()->role == "livreur";
    }
    public function isCustomer(){
        return Auth::user()->role == "customer";
    }
    public function isFournisseur(){
        return Auth::user()->role == "fournisseur";
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    
    public function demandes(){
        return $this->hasMany(Demande::class);
    }
    public function missions(){
        return $this->hasMany(Mission::class, "livreur_id", "id");
    }

}
