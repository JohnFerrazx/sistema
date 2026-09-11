<?php

namespace App\Controllers;
use App\Models\ConteudoModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ConteudoController extends BaseController
{
    public function index(): string
    {
        
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(2);
        return view('home', $dados);
    }
    
    
    public function contato() : string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(3);
        return view('contato', $dados);
        
    }
    public function quemsou() : string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(4);
        return view('quemsou', $dados);
        
    }
    public function produtos () : string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(5);
        return view('produtos', $dados);
        
    }
}
