<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class MangaController extends Controller
{
    //provide data to the home page.
    public function index()
    {
        $manga = new Manga();
        $mangas = $manga->getAll();
        return view('index',compact('mangas'));
    }
}
