<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $clients = User::where('role', 'client')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }
}
