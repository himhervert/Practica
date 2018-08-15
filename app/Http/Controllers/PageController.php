<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return "About Us Page";
    }

    public function anuncios()
    {
        return "Anuncios Page";
    }
    public function contact()
    {
        return "Sumited Page";
    }
    
}