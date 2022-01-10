<?php

namespace App\Http\Controllers;

use App\Models\Bean;
use App\Models\Manfaat;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sejarah()
    {
        $contents = Sejarah::find(1);

        return view('sejarah', compact('contents'));
    }

    public function jenis()
    {
        $beans = Bean::all();

        return view('jenis', compact('beans'));
    }

    public function manfaat()
    {
        $manfaat = Manfaat::all();

        return view('manfaat', compact('manfaat'));
    }
}
