<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function homepage()
    {
        // Recupera tutti i film dal database
        $movies = Movie::all();

        // Ritorna la vista 'home' passando i film recuperati
        return view('home', compact('movies'));
    }
}