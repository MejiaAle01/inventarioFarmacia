<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class adminSession implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // Do something here
        /*if (!session('tipousuario') == 'Administrador') {
            return redirect()->to(base_url('/signIn'));
        }*/
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}