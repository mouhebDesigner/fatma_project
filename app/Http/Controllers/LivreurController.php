<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LivreurRequest;

class LivreurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $livreurs = User::where('role', 'livreur')->where('approuver', 0)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.livreurs.index', compact('livreurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.livreurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivreurRequest $request)
    {
        $livreur = new User();
        $livreur->nom = $request->nom;
        $livreur->prenom = $request->prenom;
        $livreur->email = $request->email;
        $livreur->cin = $request->cin;
        $livreur->adresse = $request->adresse;
        $livreur->numtel = $request->numtel;
        $livreur->date_naissance = $request->date_naissance;
        $livreur->password = Hash::make($request->password);
        $livreur->role = "livreur";
        
        $livreur->save();


        return redirect('admin/livreurs')->with('added', 'L\'livreur a été ajouté avec succés');
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
    public function edit(User $livreur)
    {

        return view('admin.livreurs.edit', compact('livreur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $livreur)
    {

        $validations_password = "";
        if($request->password != ""){
            $validations_password = "required | string | min:8 | confirmed";
        }
        $request->validate([
            'numtel' => "required | numeric | digits:8 | unique:users,numtel,".$livreur->id.",id",
            'cin' => "required | numeric | digits:8 | unique:users,cin,".$livreur->id.",id",
            "password" => $validations_password,
            "email" =>  "required | string | email | max:255 | unique:users,email,".$livreur->id.",id",
            'nom' => 'required | string | max:255',
            'prenom' => 'required | string | max:255',
            'adresse' => 'required | string | max:255',
        ]);

        $livreur->nom = $request->nom;
        $livreur->prenom = $request->prenom;
        $livreur->email = $request->email;
        $livreur->cin = $request->cin;
        $livreur->adresse = $request->adresse;
        $livreur->numtel = $request->numtel;
        $livreur->date_naissance = $request->date_naissance;
        $livreur->password = Hash::make($request->password);
        $livreur->role = "livreur";

        if($request->password != ""){
            $livreur->password = Hash::make($request->password);

            $livreur->save();
        }
        $livreur->save();

        



        return redirect('admin/livreurs')->with('updated', 'L\'livreur a été modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $livreur)
    {
        $livreur->delete();

        return response()->json([
            "deleted" => "La livreur a été supprimer avec succés"
        ]);
        
    }
}
