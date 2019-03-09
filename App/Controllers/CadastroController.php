<?php
namespace App\Controllers;

use Foundation\Controller;

class CadastroController extends Controller
{
    public function index()
    {
        return $this->render('cadastro/index');
    }

    public function salvar()
    {
        echo '<pre>';
        var_dump($_POST);
    }
}
