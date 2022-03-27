<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function approuver(User $user){

        $user->approuver = 1;
        $user->save();

        return redirect()->back()->with('success', "L'inscription a été approuvé avec succés");
    }
    public function refuser(User $user){

        $user->approuver = 0;
        $user->save();

        return redirect()->back()->with('success', "L'inscription a été refusé avec succés");
    }
}
