<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $user = User::with('getAddressRelation')->get();
//        dd($user);

        $user = User::with('getPostsRelation.getCommentsRelation')->get();
//        $user = User::with('getRolesRelation')->get();
//        $user = User::with('getPostsRelation', 'getAddressRelation')->get();
//        $post = Posts::with('getUserRelation')->get();
//        dd($post);
        dd($user);

        return view('home');
    }
}
