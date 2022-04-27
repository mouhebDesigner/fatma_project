<?php

namespace App\Http\Controllers\Admin;

use Auth;
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

            $produits = Produit::paginate(10);
        } else {
            $produits = Auth::user()->produits()->paginate(10);
        }

        return view('admin.produits.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitRequest $request)
    {
        $produit = Produit::create($request->all());
        if($request->hasFile('images')){
            foreach($request->images as $key => $image){
               
                $resource = new Ressource();
                $resource->path = $image->store('ressources');
                $resource->type = "image";
                $resource->produit_id = $produit->id;
                $resource->save();
            }
        }
        return redirect('fournisseur/produits')->with('created', 'Le produit à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        return view('admin.produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {

        return view('admin.produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProduitUpdateRequest $request, produit $produit)
    {
        $produit->update($request->all());

        return redirect('fournisseur/produits')->with('updated', 'Le produit à été modifié avec succée');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produit)
    {
        $produit->delete();
        
        return response()->json([
            "deleted" => "Catégorie à été supprimé"
        ]);
    }
}
