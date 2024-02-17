<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    public function getUser(){
        $user = User::all();
        return view('all_user', compact( 'user'));
    }

    public function getArea($id){
        $user = User::with('area')->find($id);
        $area = $user->area;
        return view('area', compact('area'));
    }
}
