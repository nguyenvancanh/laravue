<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;
        // foreach ($myFavorites as $myFavorite) {

        //     dd($myFavorite->favorited());

        // }
        return view('users.my_favorites', compact('myFavorites'));
    }
}
