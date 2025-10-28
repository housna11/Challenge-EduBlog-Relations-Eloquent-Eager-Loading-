<?php

namespace App\Http\Controllers;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
       return Profile::all();
    }

    public function store(request $request) {
       $infos=$request->validate([
       'user_id'=>'required',
       'bio'=>'required',
       'avatar'=>'required',
       ]);
       $profil=Profile::create($infos);
       return response()->json($profil);
    }
}
