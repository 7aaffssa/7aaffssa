<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;




class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::paginate(9); 
        return view('profile.index',compact('profiles'));
    }
    public function show(request $request){
        $id=(int)$request->id; //! ajoute int pour la conversion de la valeur de l'id en entier
        $profile = Profile::findOrFail($id);
 
        return view('profile.show',compact('profile'));}

    public function create(){
        return view('profile.create');
        
    }

} 