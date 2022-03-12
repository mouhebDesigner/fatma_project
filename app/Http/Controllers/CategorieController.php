<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CategorieController extends Controller
{

    public function __construct(){
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(str_contains($request->path(), 'admin') && Auth::user()->isCustomer()){
            abort(404);
        }
        if(session('created')){
            Alert::success('Success Title', session('created'));
        }
        if(session('updated')){
            Alert::success('Success Title', session('updated'));
        }
        $categories = Categorie::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $categorie = Categorie::create($request->all());

        if($request->hasFile('icone')){
            $categorie->icone = $request->icone->store('images');
        }
        $categorie->save();

        return redirect('admin/categories')->with('created', 'La catégorie a été créé avec succés');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, Categorie $category)
    {
        $category->update($request->all());

        
        if($request->hasFile('icone')){
            $category->icone = $request->icone->store('images');
        }
        $category->save();

        return redirect()->route('admin.categories.index')->with('updated', 'La catégorie a été modifié avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        
        $category->delete();

        return response()->json([
            "deleted" => "categorie is deleted"
        ]);
    }

    public function deleteAll(Request $request)
    {
        foreach($request->items as $item){
            Categorie::find($item)->delete();
        }

        return response()->json([
            "deleted" => "categories are deleted"
        ]);
        
    }
}
