<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Post;


class BiodataController extends Controller
{

    public function about()
    {
        return view('about',[
            'nama' => Biodata::first()->nama,
            'prodi' => Biodata::first()->prodi,
            'poltek' => Biodata::first()->poltek,
            'nim' => Biodata::first()->nim,
        ]);
    }
}
