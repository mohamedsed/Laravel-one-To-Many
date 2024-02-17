<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Area\Area;
use App\Models\User;

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
    public function deleteUser($id){
         $user = User::find($id);
        $user->area()->delete();
        $user->delete();
        return 'user and area Deleted successfuly';

        //   $user->delete();
        //   return redirect()->route('all.user');

    }
}
