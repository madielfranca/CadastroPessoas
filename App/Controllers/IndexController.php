<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;

class IndexController extends Controller
{
    public function index()
    {
        $pessoas = (new Pessoa)->getAll();
        // echo '<pre>';
        // var_dump($pessoas[0]->nome);
        // foreach ($pessoas as $key => $pessoa){
        //     var_dump($pessoas[$key]->nome);
        // };
        return $this->render('index', [
            'pessoas' => $pessoas
        ]);
    }
}
