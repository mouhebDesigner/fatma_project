<?php

namespace App\Http\Controllers\Admin;

use App\Models\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LivraisonController extends Controller
{
    public function index(Request $request)
    {
        $demandes = Demande::paginate(10);

        return view('admin.livraisons.index', compact('demandes'));
    }

    public function affect(Demande $demande){
        
        return view('admin.livraisons.affect', compact('demande'));
    }
}
