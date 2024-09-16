<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function home()
    {
        // Passiamo eventuali dati dinamici alla vista "home"
        return view('home', ['message' => 'Benvenuto nella Home Page']);
    }

    public function about()
    {
        // Passiamo eventuali dati dinamici alla vista "about"
        return view('about', ['info' => 'Questa è l\'about page']);
    }

    public function contact()
    {
        // Passiamo eventuali dati dinamici alla vista "contact"
        return view('contacts', ['email' => 'franc.sommella@gmail.com']);
    }
}
