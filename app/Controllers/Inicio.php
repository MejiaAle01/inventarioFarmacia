<?php

namespace App\Controllers;

class Inicio extends BaseController {
    public function index() {
        $vista = 
            view('principal/navbar').
            view('principal/inicio').
            view('principal/footer')
        ;

        return $vista;
    }

    public function sesion() {
        return view('forms/signin');
    }

    public function registro() {
        return view('forms/register');
    }
}