<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Home
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function komen(){
        $data=array(
            "notelp" => Post::getNotelp(),
            "email" => Post::getEmail(),
        );
        return view('komen',$data);
    }
}
