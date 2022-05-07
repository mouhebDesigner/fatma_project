<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Demande;
use App\Models\Produit;
use App\Models\Ressource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\EventUpdateRequest;
use App\Http\Requests\ProduitUpdateRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(str_contains($request->path(), 'admin') && Auth::user()->isStudent()){
            abort(404);
        }
        if(session('created')){
            Alert::success('Success Title', session('created'));
        }
        if(session('updated')){
            Alert::success('Success Title', session('updated'));
        }
        if(Auth::user()->isAdmin()){

            $demandes = Demande::paginate(10);
        } else {
            $demandes = Auth::user()->demandes()->paginate(10);
        }

        return view('admin.livraisons.index', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.livraisons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demande = Demande::create($request->all());
        if($request->hasFile('document')){
            $demande->document = $request->document->store('uploads');
        }
        $demande->save();
        
        return redirect('fournisseur/livraisons')->with('created', 'La demande à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        return view('admin.livraisons.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        return view('admin.livraisons.edit', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        $demande->update($request->all());

        return redirect('fournisseur/demandes')->with('updated', 'Le produit à été modifié avec succée');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(demande $demande)
    {
        $demande->delete();
        
        return response()->json([
            "deleted" => "Demande à été supprimé"
        ]);
    }
}
