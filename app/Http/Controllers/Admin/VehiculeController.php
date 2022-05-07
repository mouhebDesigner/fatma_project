<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\vehicule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\VehiculeRequest;
use RealRashid\SweetAlert\Facades\Alert;

class VehiculeController extends Controller
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
        $vehicules = vehicule::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculeRequest $request)
    {
        $vehicule = vehicule::create($request->all());

      

        return redirect('admin/vehicules')->with('created', 'La catégorie a été créé avec succés');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(vehicule $vehicule)
    {
        return view('admin.vehicules.edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculeRequest $request, vehicule $vehicule)
    {
        $vehicule->update($request->all());

        
   

        return redirect()->route('admin.vehicules.index')->with('updated', 'La catégorie a été modifié avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicule $vehicule)
    {
        
        $vehicule->delete();

        return response()->json([
            "deleted" => "vehicule is deleted"
        ]);
    }

    public function deleteAll(Request $request)
    {
        foreach($request->items as $item){
            vehicule::find($item)->delete();
        }

        return response()->json([
            "deleted" => "vehicules are deleted"
        ]);
        
    }
}
