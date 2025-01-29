<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index(Request $request){
$users=[
    ['id'=>'1','nom'=>'sh', 'metier'=>'Expert tehnique'],
    ['id'=>'2','nom'=>'AA', 'metier'=>'DIRECTEUR'],
    ['id'=>'3','nom'=>'BB', 'metier'=>'JARDINIER'],
];
        return view('home',compact('users'));
    }
}