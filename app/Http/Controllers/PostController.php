<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Home
    public function home(){
        $data=array(
            "welcome" => Post::getWelcome(),
            "hello" => Post::getHello(),
        );
        return view('home',$data);
    }

    public function komen(){
        $data=array(
            "notelp" => Post::getNotelp(),
            "email" => Post::getEmail(),
        );
        return view('komen',$data);
    }
}
