<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessinateur;

class DessinateurController extends Controller
{
    //
    public function index()
    {
        $dessinateur = new Dessinateur();
        $dessinateurs = $dessinateur->getAll();
        return view('dessinateurs',compact('dessinateurs'));
    }
}
