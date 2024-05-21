<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genreModel = new Genre();
        $genres = $genreModel->getAllgenre();
        return view('genre', ['genres' => $genres]);
    }
}
