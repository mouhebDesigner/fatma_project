<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Mission;
use Illuminate\Http\Request;
use App\Http\Requests\MissionRequest;
use RealRashid\SweetAlert\Facades\Alert;

class MissionController extends Controller
{

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
        $missions = Mission::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.missions.index', compact('missions'));
    }

    public function store(MissionRequest $request){

        $mission = Mission::create($request->all());

        return redirect('admin/missions')->with('created', 'La mission a été créé avec succés');
    }

}
