<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Auth;
class ProfileController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index(){
        return view('admin.profile');
    }

    public function update(Request $request){
        
        $user = User::find(Auth::user()->id);

        $user->update($request->except('password'));

        if($request->hasFile('avatar')){
            $user->avatar = $request->avatar->store('uploads');
            $user->save();
        }

        return redirect('/profile')->with('updated', 'Votre profile a été modifié avec succé');
    }
}
