<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('startseite');
        echo view('templates/footer');
    }

    public function spalten()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('spalten');
        echo view('templates/footer');
    }
    public function spaltenErstellen()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('spalten_erstellen');
        echo view('templates/footer');
    }
}