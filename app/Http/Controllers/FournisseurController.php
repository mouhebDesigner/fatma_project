<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\FournisseurRequest;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $fournisseurs = User::where('role', 'fournisseur')->where('approuver', 1)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.fournisseurs.index', compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FournisseurRequest $request)
    {
        $fournisseur = new User();
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->email = $request->email;
        $fournisseur->password = Hash::make($request->password);
        $fournisseur->numtel = $request->numtel;
        $fournisseur->date_naissance = $request->date_naissance;
        $fournisseur->role = "fournisseur";
        $fournisseur->approuver = 1;
        $fournisseur->categorie_id = $request->categorie_id;
        
        $fournisseur->save();


        return redirect('admin/fournisseurs')->with('added', 'L\'fournisseur a été ajouté avec succés');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $fournisseur)
    {

        return view('admin.fournisseurs.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $fournisseur)
    {

        $validations_password = "";
        if($request->password != ""){
            $validations_password = "required | string | min:8 | confirmed";
        }
        $request->validate([
            'numtel' => "required | numeric | digits:8 | unique:users,numtel,".$fournisseur->id.",id",
            "password" => $validations_password,
            "email" =>  "required | string | email | max:255 | unique:users,email,".$fournisseur->id.",id",
            'nom' => 'required | string | max:255',
            'prenom' => 'required | string | max:255',
            'date_naissance' => 'required',
        ]);

        $fournisseur =  User::find($id);

        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->email = $request->email;
        $fournisseur->password = Hash::make($request->password);
        $fournisseur->numtel = $request->numtel;
        $fournisseur->date_naissance = $request->date_naissance;
      

        $fournisseur->save();



        return redirect('admin/fournisseurs')->with('updated', 'L\'fournisseur a été modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/fournisseurs')->with('deleted', 'L\'fournisseur a été supprimer avec succés');
        
    }
}
