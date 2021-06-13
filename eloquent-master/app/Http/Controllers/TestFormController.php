<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestFormController extends Controller
{
    //Controleur pour la manipulation du formulaire
    //méthode getInfo : pour afficher le formulaire au client (méthode GET)
    //méthode postInfo : le client soumet son formulaire (méthode POST).

    public function getInfos()
    {
        //Le client demande l'affichage du formulaire.
        //il est retourné dans la vue monFormulaire.blade.php
        return view('monFormulaire');
    }

    public function postInfos(Request $request)
    {
        //on ne crée pas de vue spécifique pour l'affichage d'un message après envoi du formulaire.
        //on se contente d'afficher ce qui a été saisi dans la zone de texte du formulaire,
        //grâce à l'objet Request passé en paramètre.
        return 'Le message saisi dans la zone de texte est : ' . $request->input('message');
    }
}
