<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Função para a página inicial
    public function home()
    {
        return view('home');
    }

    // Função para a página Sobre Nós
    public function about()
    {
        return view('about');
    }

    // Função para a página O que Reciclamos
    public function materials()
    {
        return view('materials');
    }

    // Dentro do seu SiteController.php

    public function acondicionamento()
    {
        return view('acondicionamento');
    }

    public function transportes()
    {
        return view('transportes');
    }

    public function servicos()
    {
        return view('servicos');
    }
}