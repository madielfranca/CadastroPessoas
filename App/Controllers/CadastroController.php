<?php
namespace App\Controllers;

use Foundation\Controller;
use App\Models\Pessoa;


class CadastroController extends Controller
{
    public function index()
    {
        return $this->render('cadastro/index');
    }

    public function salvar()
    {
        // echo '<pre>';
        // var_dump($_POST);

        $dados = [
            'nome' => input()->get('nome'),
            'email' => input()->get('email')
        ];

        $pessoa = new Pessoa;

        $qtd = $pessoa->insert($dados);

        if ($qtd)
        {
            session()->put('_sucesso', 'incluido com sucesso');
            return redirect()->route('cadastro.index');
        }
        session()->put('erro', 'erro ao excluir pessoa');
        return redirect()->route('cadastro.index');


    }
}
